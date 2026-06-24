<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('title')
                    ->label('Judul Foto')
                    ->required()
                    ->maxLength(255),

                FileUpload::make('image')
                    ->label('Gambar')
                    ->image()
                    ->directory('gallery')
                    ->required(),

                Textarea::make('description')
                    ->label('Deskripsi')
                    ->rows(4),

            ]);
    }
}