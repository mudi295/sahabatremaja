<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;

class SettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('site_name')
                    ->label('Nama Website')
                    ->required(),

                FileUpload::make('logo')
                    ->image()
                    ->directory('settings'),

                TextInput::make('hero_title')
                    ->label('Judul Hero'),

                Textarea::make('hero_subtitle')
                    ->label('Subtitle Hero')
                    ->rows(3),

                FileUpload::make('hero_image')
                    ->image()
                    ->directory('settings'),

                Textarea::make('about')
                    ->label('Tentang Kami')
                    ->rows(5),

                TextInput::make('email')
                    ->email(),

                TextInput::make('phone'),

                Textarea::make('address')
                    ->rows(3),

                TextInput::make('instagram'),

                TextInput::make('facebook'),

                TextInput::make('youtube'),

            ]);
    }
}