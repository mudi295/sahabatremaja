<?php

namespace App\Filament\Resources\Settings\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class SettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                ImageColumn::make('logo')
                    ->label('Logo'),

                TextColumn::make('site_name')
                    ->label('Nama Website')
                    ->searchable(),

                TextColumn::make('email'),

                TextColumn::make('phone'),

                TextColumn::make('updated_at')
                    ->dateTime('d M Y H:i'),

            ]);
    }
}