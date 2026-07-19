<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $testimonials = [
            [
                'client_name' => 'John Smith',
                'program_name' => 'Evolved & Balanced',
                'result_metric' => '15 lbs',
                'result_type' => 'Fat Loss',
                'quote' => 'The most transformative coaching experience I\'ve had. Dr. Eyad\'s evidence-based approach delivered real results.',
                'is_featured' => true,
            ],
            [
                'client_name' => 'Sarah Johnson',
                'program_name' => 'Evolved & Balanced',
                'result_metric' => '20 lbs',
                'result_type' => 'Muscle Gain',
                'quote' => 'Finally, a coach who understands personalization. My program was tailored perfectly to my lifestyle.',
                'is_featured' => true,
            ],
            [
                'client_name' => 'Michael Chen',
                'program_name' => 'Evolved & Balanced',
                'result_metric' => '8 weeks',
                'result_type' => 'Strength Gain',
                'quote' => 'The level of attention to detail in this program is unmatched. I\'ve never felt more confident in my fitness journey.',
                'is_featured' => true,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
