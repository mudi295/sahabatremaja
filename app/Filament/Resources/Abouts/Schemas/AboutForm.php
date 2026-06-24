<?php

namespace App\Filament\Resources\Abouts\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;

class AboutForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                TextInput::make('subtitle')
                    ->maxLength(255),

                Textarea::make('description')
                    ->rows(6)
                    ->required(),

                FileUpload::make('image')
                    ->image()
                    ->directory('about'),

                Textarea::make('vision')
                    ->rows(4),

                Textarea::make('mission')
                    ->rows(6),
                    
                TextInput::make('impact_total')
                    ->label('Impact Total'),

                TextInput::make('impact_label')
                    ->label('Impact Label'),

            ]);
    }
}