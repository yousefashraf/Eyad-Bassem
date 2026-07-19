<?php

namespace Database\Seeders;

use App\Models\Coach;
use App\Models\Program;
use App\Models\ProcessStep;
use App\Models\CoachingMethod;
use Illuminate\Database\Seeder;

class CoachSeeder extends Seeder
{
    public function run(): void
    {
        $coach = Coach::create([
            'name' => 'Dr. Eyad Bassem',
            'title' => 'Evidence-Based Coaching Specialist',
            'bio' => 'Where transformation begins with understanding. Every program I design is the result of thorough assessment, clinical precision, and an unwavering commitment to your individual needs. I don\'t believe in templates. I believe in bespoke coaching — built from evidence-based methods, progressive overload principles, and a deep understanding of your body.',
            'expertise' => ['Periodized Training', 'Nutrition Strategy', 'Progressive Overload', 'Sustainable Fitness'],
            'certifications' => ['ISSA Certified', 'Evidence-Based Nutrition', 'Training Periodization'],
            'clients_transformed' => 25,
            'coaching_type' => '1:1',
            'customizable_percentage' => 100,
        ]);

        $program = Program::create([
            'coach_id' => $coach->id,
            'name' => 'Evolved & Balanced',
            'slug' => 'evolved-balanced',
            'description' => 'A comprehensive evidence-based coaching program designed for measurable, lasting transformation.',
            'phases' => ['Discovery', 'Design', 'Execute', 'Evolve'],
            'duration_weeks' => 12,
        ]);

        $steps = [
            ['step_number' => 1, 'title' => 'Discovery', 'description' => 'We begin with a comprehensive assessment — your health history, exercise background, food preferences, nutritional habits, and personal goals. Every detail matters.'],
            ['step_number' => 2, 'title' => 'Design', 'description' => 'Your bespoke program is built from the ground up — a periodized training plan paired with a macro-optimized nutrition strategy, tailored to your lifestyle and schedule.'],
            ['step_number' => 3, 'title' => 'Execute', 'description' => 'You train with purpose. Every set, rep, and tempo is prescribed. Every meal is planned with flexibility. I\'m with you at every step — adjusting, refining, pushing.'],
            ['step_number' => 4, 'title' => 'Evolve', 'description' => 'As your body adapts, so does your program. Progressive overload, cycle transitions, and nutritional recalibrations ensure continuous, measurable progress.'],
        ];

        foreach ($steps as $step) {
            ProcessStep::create([
                'program_id' => $program->id,
                ...$step,
            ]);
        }

        $methods = [
            ['title' => 'Periodized Training', 'description' => 'Structured training phases with progressive intensity and strategic deloads.', 'icon' => 'fas fa-dumbbell'],
            ['title' => 'Evidence-Based Nutrition', 'description' => 'Macro-optimized nutrition strategy tailored to your goals and preferences.', 'icon' => 'fas fa-apple-alt'],
            ['title' => 'Progressive Overload', 'description' => 'Continuous progression ensuring your body never plateaus.', 'icon' => 'fas fa-chart-line'],
        ];

        foreach ($methods as $method) {
            CoachingMethod::create([
                'program_id' => $program->id,
                ...$method,
            ]);
        }
    }
}
