<?php

namespace App\Filament\Resources\Profiles\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;

class ProfileForm
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
    ->acceptedFileTypes(['image/jpeg', 'image/jpg', 'image/png', 'image/webp']) // Menentukan tipe secara spesifik
    ->directory('Profile'),

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