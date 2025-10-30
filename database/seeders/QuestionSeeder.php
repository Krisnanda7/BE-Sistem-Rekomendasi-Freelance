<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         $questions = [
            "Apakah Anda memiliki skill programming?",
            "Apakah Anda memiliki skill desain grafis atau UI/UX?",
            "Apakah Anda sudah memiliki pengalaman kerja freelance sebelumnya?",
            "Apakah Anda lebih suka proyek berdurasi singkat?",
            "Apakah Anda lebih suka bekerja dengan tim?",
            "Apakah Anda nyaman bekerja secara remote?",
            "Apakah Anda lebih suka proyek dengan budget besar?",
            "Apakah Anda tertarik dengan proyek di bidang AI?",
            "Apakah Anda bisa bekerja penuh waktu?",
            "Apakah Anda fleksibel dengan deadline proyek?",
        ];

        foreach ($questions as $q) {
            Question::create(['text' => $q]);
        }
    }
}
