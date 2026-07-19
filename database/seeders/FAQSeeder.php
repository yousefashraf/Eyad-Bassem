<?php

namespace Database\Seeders;

use App\Models\FAQ;
use Illuminate\Database\Seeder;

class FAQSeeder extends Seeder
{
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'What is included in the coaching program?',
                'answer' => 'Each program includes a personalized training plan, macro-optimized nutrition strategy, weekly check-ins, form reviews, and adjustments based on your progress.',
                'category' => 'general',
            ],
            [
                'question' => 'How long does it take to see results?',
                'answer' => 'Most clients notice visible changes within 4-6 weeks. However, significant transformations typically occur within 12 weeks with consistent adherence.',
                'category' => 'results',
            ],
            [
                'question' => 'Is the program customizable?',
                'answer' => 'Yes! Every aspect of the program can be customized to fit your preferences, goals, schedule, and lifestyle constraints.',
                'category' => 'customization',
            ],
            [
                'question' => 'Do I need any special equipment?',
                'answer' => 'Programs can be adapted for gym settings or home workouts. We can work with whatever equipment you have available.',
                'category' => 'logistics',
            ],
            [
                'question' => 'What is your experience with different body types?',
                'answer' => 'I work with clients of all body types and fitness levels. Every program is designed based on individual assessment and goals.',
                'category' => 'general',
            ],
            [
                'question' => 'How often do we communicate?',
                'answer' => 'Communication frequency can be adjusted based on your needs. Most clients have weekly check-ins with additional support as needed.',
                'category' => 'support',
            ],
        ];

        foreach ($faqs as $faq) {
            FAQ::create($faq);
        }
    }
}
