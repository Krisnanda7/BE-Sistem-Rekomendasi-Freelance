<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rule;
use App\Models\Question;

class RuleSeeder extends Seeder
{
    public function run(): void
    {
        $questions = Question::pluck('text')->toArray();

        $rules = [
            [
                'name' => 'Web Developer Freelance',
                'conditions' => [true, false, true, true, false, true, false, false, true, true],
                'description' => 'Cocok untuk proyek pembuatan website atau aplikasi web dengan durasi singkat secara remote.',
            ],
            [
                'name' => 'UI/UX Designer Freelance',
                'conditions' => [false, true, true, true, false, true, false, false, false, true],
                'description' => 'Cocok untuk proyek desain antarmuka aplikasi mobile atau website startup.',
            ],
            [
                'name' => 'AI Developer Freelance',
                'conditions' => [true, false, true, false, false, true, true, true, true, true],
                'description' => 'Cocok untuk proyek pengembangan model AI/ML untuk perusahaan teknologi.',
            ],
            [
                'name' => 'Graphic Designer Remote',
                'conditions' => [false, true, false, true, false, true, false, false, false, true],
                'description' => 'Cocok untuk proyek desain poster, banner, dan materi promosi digital jarak jauh.',
            ],
        ];

        foreach ($rules as $rule) {
            Rule::create($rule);
        }
    }
}
