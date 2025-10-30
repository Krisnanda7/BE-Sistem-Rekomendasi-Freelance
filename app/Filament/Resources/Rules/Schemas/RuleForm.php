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
         $questions = Question::pluck('text')->toArray();
         
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
                            ->label('Jawaban (Ya/Tidak)')
                            ->required(),
                    ])
                    ->default(fn() =>
                        collect($questions)->map(fn($q) => [
                            'question' => $q,
                            'value' => false,
                        ])->toArray()
                    ),
        ]);
    }
}
