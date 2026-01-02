<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    public function run()
    {
        $reviews = [
            [
                'name' => 'Albert Flores',
                'designation' => 'Web Designer',
                'quoute' => 'We have been operating for over a decade providing top-notch services to our clients and building a strong track record in the industry. We have been operating for over a decade providing top-notch services to our clients.',
                'image' => 'assets/img/testimonial-visual.jpg',
                'avatar' => 'assets/img/avatar-albert.png',
            ],
            [
                'name' => 'Sarah Jenkins',
                'designation' => 'Marketing Director',
                'quoute' => 'UserBX transformed our digital presence. Their attention to detail and creative approach helped us reach a wider audience than ever before. truly exceptional service.',
                'image' => 'assets/img/blog-01.jpg',
                'avatar' => 'assets/img/avatar-albert.png',
            ],
            [
                'name' => 'Michael Chen',
                'designation' => 'Startup Founder',
                'quoute' => 'The team at UserBX is simply amazing. They understood our vision perfectly and delivered a product that exceeded our expectations. Highly recommended!',
                'image' => 'assets/img/blog-02.jpg', // Using blog images as placeholders for the visual
                'avatar' => 'assets/img/avatar-albert.png',
            ]
        ];

        foreach ($reviews as $item) {
            $review = Review::create([
                'name' => $item['name'],
                'designation' => $item['designation'],
                'quoute' => $item['quoute'], // Note: Using the column name (typo) from migration
            ]);

            // Handle Avatar
            $avatarPath = public_path($item['avatar']);
            if (file_exists($avatarPath)) {
                $review->addMedia($avatarPath)
                    ->preservingOriginal()
                    ->toMediaCollection('photo');
            }

            // Handle Visual (Big Image)
            $visualPath = public_path($item['image']);
            if (file_exists($visualPath)) {
                $review->addMedia($visualPath)
                    ->preservingOriginal()
                    ->toMediaCollection('visual');
            }
        }
    }
}
