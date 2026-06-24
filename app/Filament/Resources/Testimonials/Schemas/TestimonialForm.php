<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('name')
                    ->required(),

                TextInput::make('position')
                    ->label('Jabatan'),

                FileUpload::make('photo')
                    ->image()
                    ->directory('testimonials'),

                Textarea::make('message')
                    ->required()
                    ->rows(5),

                Toggle::make('is_active')
                    ->default(true),

            ]);
    }
}