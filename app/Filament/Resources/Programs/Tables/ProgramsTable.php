<?php

namespace App\Filament\Resources\Programs\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class ProgramsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('thumbnail'),

                TextColumn::make('title')
                    ->searchable(),

                TextColumn::make('location'),

                TextColumn::make('event_date')
                    ->date(),

                TextColumn::make('status')
                    ->badge(),

                TextColumn::make('created_at')
                    ->dateTime('d M Y'),
            ]);
    }
}