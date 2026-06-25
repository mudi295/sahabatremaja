<?php

namespace App\Filament\Resources\Statistics\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;

class StatisticForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('value')
                    ->required(),

                TextInput::make('title')
                    ->required(),

                TextInput::make('icon')
                    ->helperText('Contoh: 🎓 ❤️ 🌱 🤝'),

                TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),

                Toggle::make('is_active')
                    ->default(true),

            ]);
    }
}