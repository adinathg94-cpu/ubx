<?php

/**
 * Laravel File Generator from JSON
 * 
 * This script reads a JSON file containing Laravel project structure
 * and generates all files and directories in the output folder.
 * 
 * JSON Structure:
 * - Each key is a file or directory name
 * - "isDir": true/false - indicates if it's a directory
 * - "content": 
 *    - If directory: contains nested JSON object
 *    - If file: contains the actual file content as string
 * - "uuid": unique identifier (ignored by this script)
 */

ini_set('display_errors', 1);
error_reporting(E_ALL);

// Configuration
$jsonFilePath = __DIR__ . '/storage/tt.json';
$outputBasePath = __DIR__ . '/output';

// Ensure output directory exists
if (!is_dir($outputBasePath)) {
    mkdir($outputBasePath, 0755, true);
    echo "✅ Created output directory: {$outputBasePath}\n\n";
}

// Read JSON file
if (!file_exists($jsonFilePath)) {
    die("❌ ERROR: JSON file not found: {$jsonFilePath}\n");
}

$jsonContent = file_get_contents($jsonFilePath);
$data = json_decode($jsonContent, true);

if (!is_array($data)) {
    die("❌ ERROR: Invalid JSON structure or failed to decode JSON\n");
}

echo "📋 Starting Laravel project generation...\n";
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n\n";

// Process each top-level item
$stats = ['files' => 0, 'dirs' => 0];
foreach ($data as $name => $item) {
    processItem($name, $item, $outputBasePath, $stats);
}

echo "\n━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
echo "✅ Process completed successfully!\n";
echo "📊 Statistics:\n";
echo "   - Directories created: {$stats['dirs']}\n";
echo "   - Files created: {$stats['files']}\n";
echo "   - Output location: {$outputBasePath}\n";

/**
 * Process a single item (file or directory)
 * 
 * @param string $name Item name
 * @param array $item Item data from JSON
 * @param string $currentPath Current path in filesystem
 * @param array &$stats Statistics counter
 */
function processItem($name, $item, $currentPath, &$stats)
{
    // Validate item structure
    if (!isset($item['isDir']) || !isset($item['content'])) {
        echo "⚠️  WARNING: Skipping invalid item: {$name}\n";
        return;
    }

    $fullPath = $currentPath . DIRECTORY_SEPARATOR . $name;
    $isDirectory = ($item['isDir'] === true || $item['isDir'] === 'true');

    if ($isDirectory) {
        // Create directory
        createDirectory($fullPath, $stats);
        
        // Process nested content
        if (is_array($item['content'])) {
            foreach ($item['content'] as $childName => $childItem) {
                // Skip uuid entries
                if ($childName === 'uuid') {
                    continue;
                }
                processItem($childName, $childItem, $fullPath, $stats);
            }
        }
    } else {
        // Create file
        createFile($fullPath, $item['content'], $stats);
    }
}

/**
 * Create a directory
 * 
 * @param string $path Directory path
 * @param array &$stats Statistics counter
 */
function createDirectory($path, &$stats)
{
    if (!is_dir($path)) {
        if (mkdir($path, 0755, true)) {
            $stats['dirs']++;
            $relativePath = getRelativePath($path);
            echo "📁 DIR:  {$relativePath}\n";
        } else {
            echo "❌ ERROR: Failed to create directory: {$path}\n";
        }
    }
}

/**
 * Create a file with content
 * 
 * @param string $path File path
 * @param string $content File content
 * @param array &$stats Statistics counter
 */
function createFile($path, $content, &$stats)
{
    // Ensure parent directory exists
    $dir = dirname($path);
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }

    // Write file
    if (file_put_contents($path, $content) !== false) {
        $stats['files']++;
        $relativePath = getRelativePath($path);
        $size = formatBytes(strlen($content));
        echo "📄 FILE: {$relativePath} ({$size})\n";
    } else {
        echo "❌ ERROR: Failed to create file: {$path}\n";
    }
}

/**
 * Get relative path from output directory
 * 
 * @param string $fullPath Full filesystem path
 * @return string Relative path
 */
function getRelativePath($fullPath)
{
    global $outputBasePath;
    return str_replace($outputBasePath . DIRECTORY_SEPARATOR, '', $fullPath);
}

/**
 * Format bytes to human-readable format
 * 
 * @param int $bytes Number of bytes
 * @return string Formatted string
 */
function formatBytes($bytes)
{
    if ($bytes >= 1048576) {
        return number_format($bytes / 1048576, 2) . ' MB';
    } elseif ($bytes >= 1024) {
        return number_format($bytes / 1024, 2) . ' KB';
    }
    return $bytes . ' B';
}
