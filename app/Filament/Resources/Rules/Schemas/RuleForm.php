<?php

namespace App\Filament\Resources\Rules\Schemas;

use App\Models\Question;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class RuleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Pekerjaan Freelance')
                    ->required(),

                Textarea::make('description')
                    ->label('Deskripsi')
                    ->required(),

                Repeater::make('conditions')
                    ->label('Kondisi (Ya/Tidak untuk setiap pertanyaan)')
                    ->schema([
                        TextInput::make('question')
                            ->label('Pertanyaan')
                            ->disabled(), // supaya user tidak ubah
                        Toggle::make('value')
                            ->label('Nilai')
                            ->required(),
                    ])
                    ->default(function () {
                        $questions = \App\Models\Question::pluck('text')->toArray();
                        return collect($questions)->map(fn($q) => [
                            'question' => $q,
                            'value' => false,
                        ])->toArray();
                    })
                    ->afterStateHydrated(function ($set, $state) {
                        // jika data lama masih berupa array boolean, ubah ke format baru
                        if (!empty($state) && isset($state[0]) && !isset($state[0]['question'])) {
                            $questions = \App\Models\Question::pluck('text')->toArray();
                            $set('conditions', collect($questions)->map(fn($q, $i) => [
                                'question' => $q,
                                'value' => $state[$i] ?? false,
                            ])->toArray());
                        }
                    }), // ← ini tanda kurung & koma penting!
            ]);
    }
}
