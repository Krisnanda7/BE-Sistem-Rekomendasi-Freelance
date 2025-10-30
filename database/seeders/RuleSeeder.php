<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rule;

class RuleSeeder extends Seeder
{
    public function run(): void
    {
        $rules = [
            [
                'name' => 'Web Developer Freelance',
                'conditions' => json_encode([
                    ['value' => true], ['value' => false], ['value' => true],
                    ['value' => true], ['value' => false], ['value' => true],
                    ['value' => false], ['value' => false], ['value' => true],
                    ['value' => true],
                ]),
                'description' => 'Cocok untuk proyek pembuatan website atau aplikasi web dengan durasi singkat secara remote.',
            ],
            [
                'name' => 'UI/UX Designer Freelance',
                'conditions' => json_encode([
                    ['value' => false], ['value' => true], ['value' => true],
                    ['value' => true], ['value' => false], ['value' => true],
                    ['value' => false], ['value' => false], ['value' => false],
                    ['value' => true],
                ]),
                'description' => 'Cocok untuk proyek desain antarmuka aplikasi mobile atau website startup.',
            ],
            [
                'name' => 'AI Developer Freelance',
                'conditions' => json_encode([
                    ['value' => true], ['value' => false], ['value' => true],
                    ['value' => false], ['value' => false], ['value' => true],
                    ['value' => true], ['value' => true], ['value' => true],
                    ['value' => true],
                ]),
                'description' => 'Cocok untuk proyek pengembangan model AI/ML untuk perusahaan teknologi.',
            ],
            [
                'name' => 'Graphic Designer Remote',
                'conditions' => json_encode([
                    ['value' => false], ['value' => true], ['value' => false],
                    ['value' => true], ['value' => false], ['value' => true],
                    ['value' => false], ['value' => false], ['value' => false],
                    ['value' => true],
                ]),
                'description' => 'Cocok untuk proyek desain poster, banner, dan materi promosi digital jarak jauh.',
            ],
        ];

        foreach ($rules as $rule) {
            Rule::create($rule);
        }
    }
}
