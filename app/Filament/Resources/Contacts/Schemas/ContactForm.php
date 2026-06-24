<?php

namespace App\Filament\Resources\Contacts\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;

class ContactForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('name')
                    ->label('Nama')
                    ->disabled(),

                TextInput::make('email')
                    ->label('Email')
                    ->disabled(),

                TextInput::make('phone')
                    ->label('Nomor HP')
                    ->disabled(),

                Textarea::make('message')
                    ->label('Pesan')
                    ->rows(8)
                    ->disabled(),

                Toggle::make('is_read')
                    ->label('Sudah Dibaca'),

            ]);
    }
}