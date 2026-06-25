<?php

namespace App\Filament\Resources\Materials\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;

class MaterialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('title')
                    ->required(),

                Select::make('type')
                    ->options([
                        'module' => 'Modul PDF',
                        'video' => 'Video Edukasi',
                    ])
                    ->required(),

                FileUpload::make('thumbnail')
                    ->image()
                    ->directory('materials'),

                FileUpload::make('file')
                    ->label('File PDF')
                    ->acceptedFileTypes([
                        'application/pdf'
                    ])
                    ->directory('modules'),

                TextInput::make('video_url'),

                Textarea::make('description')
                    ->rows(5),

                Toggle::make('is_active')
                    ->default(true),

            ]);
    }
}