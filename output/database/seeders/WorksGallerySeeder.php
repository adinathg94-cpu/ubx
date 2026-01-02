<?php

namespace Database\Seeders;

use App\Models\WorksGallery;
use Illuminate\Database\Seeder;

class WorksGallerySeeder extends Seeder
{
    public function run()
    {
        $works = [
            [
                'title' => 'Luxury Brand Identity',
                'sub_title' => 'Branding',
                'tag' => 'branding',
                'image' => 'portfolio-01.png',
            ],
            [
                'title' => 'Frayuri Campaign',
                'sub_title' => 'Branding & Photography',
                'tag' => 'branding',
                'image' => 'portfolio-02.png',
            ],
            [
                'title' => 'Fresh Packaging',
                'sub_title' => 'Product Design',
                'tag' => 'digital-design',
                'image' => 'portfolio-03.png',
            ],
            [
                'title' => 'Sneaker Campaign',
                'sub_title' => 'Photography',
                'tag' => 'digital-design',
                'image' => 'portfolio-04.png',
            ],
            [
                'title' => '3D Interface Pattern',
                'sub_title' => 'UI/UX Design',
                'tag' => 'ui-ux',
                'image' => 'portfolio-05.png',
            ],
            [
                'title' => 'GNTEN Rebrand',
                'sub_title' => 'Brand Identity',
                'tag' => 'branding',
                'image' => 'portfolio-06.png',
            ],
            [
                'title' => 'Lighting Collection',
                'sub_title' => 'Product Design',
                'tag' => 'digital-design',
                'image' => 'portfolio-07.png',
            ],
            [
                'title' => 'Crystal UI Elements',
                'sub_title' => 'UI Design',
                'tag' => 'ui-ux',
                'image' => 'portfolio-08.png',
            ],
        ];

        foreach ($works as $item) {
            $work = WorksGallery::create([
                'title' => $item['title'],
                'sub_title' => $item['sub_title'],
                'tag' => $item['tag'],
            ]);

            $imagePath = public_path('assets/img/' . $item['image']);

            if (file_exists($imagePath)) {
                $work->addMedia($imagePath)
                    ->preservingOriginal()
                    ->toMediaCollection('image');
            }
        }
    }
}
