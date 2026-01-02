<?php

namespace Database\Seeders;

use App\Models\InsightsUpdate;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class InsightsSeeder extends Seeder
{
    public function run()
    {
        $insights = [
            [
                'title' => 'World of Wonder Discovering Diverse Landscapes',
                'description' => 'Lorem ipsum is simply dummy text of the printing and typeset lorem ipsum.',
                'created_at' => Carbon::parse('2025-10-18'),
                'image' => 'blog-01.jpg',
            ],
            [
                'title' => 'Search of Serenity Tranquil Retreats and Escapes',
                'description' => 'Lorem ipsum is simply dummy text of the printing and typeset lorem ipsum.',
                'created_at' => Carbon::parse('2025-10-18'),
                'image' => 'blog-02.jpg',
            ],
            [
                'title' => 'Road to Adventure Embarking on New Horizons',
                'description' => 'Lorem ipsum is simply dummy text of the printing and typeset lorem ipsum.',
                'created_at' => Carbon::parse('2025-10-18'),
                'image' => 'blog-03.jpg',
            ],
            [
                'title' => 'New Horizons in Digital Design',
                'description' => 'Exploring the latest trends in UI/UX and how they shape user experiences.',
                'created_at' => Carbon::parse('2025-10-18'),
                'image' => 'blog-01.jpg',
            ],
            [
                'title' => 'The Future of Virtual Reality',
                'description' => 'How VR is transforming industries from gaming to healthcare and education.',
                'created_at' => Carbon::parse('2025-10-18'),
                'image' => 'blog-02.jpg',
            ],
            [
                'title' => 'Building Remote Teams',
                'description' => 'Strategies for effective collaboration and culture building in remote work.',
                'created_at' => Carbon::parse('2025-10-18'),
                'image' => 'blog-03.jpg',
            ],
        ];

        foreach ($insights as $item) {
            $insight = InsightsUpdate::create([
                'title' => $item['title'],
                'description' => $item['description'],
                'created_at' => $item['created_at'],
            ]);

            $imagePath = public_path('assets/img/' . $item['image']);

            if (file_exists($imagePath)) {
                $insight->addMedia($imagePath)
                    ->preservingOriginal()
                    ->toMediaCollection('image');
            }
        }
    }
}
