<?php

namespace App\Filament\Resources\Materials\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;

class MaterialsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                ImageColumn::make('thumbnail')
                    ->label('Thumbnail'),

                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable(),

                TextColumn::make('type')
                    ->badge()
                    ->color(fn ($state) => match ($state) {
                        'module' => 'success',
                        'video' => 'warning',
                        default => 'gray',
                    }),

                IconColumn::make('is_active')
                    ->boolean(),

                TextColumn::make('created_at')
                    ->dateTime('d M Y'),

            ]);
    }
}