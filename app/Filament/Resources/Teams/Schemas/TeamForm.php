<?php

namespace App\Filament\Resources\Teams\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;

class TeamForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('name')
                    ->required(),

                FileUpload::make('photo')
                    ->image()
                    ->directory('team'),

                TextInput::make('position')
                    ->label('Jabatan')
                    ->required(),

                TextInput::make('division')
                    ->label('Divisi'),

                Textarea::make('bio')
                    ->rows(4),

                TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),

                Toggle::make('is_active')
                    ->default(true),

            ]);
    }
}