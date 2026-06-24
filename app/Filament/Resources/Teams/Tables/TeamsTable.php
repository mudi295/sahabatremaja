<?php

namespace App\Filament\Resources\Teams\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;

class TeamsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                ImageColumn::make('photo'),

                TextColumn::make('name')
                    ->searchable(),

                TextColumn::make('position'),

                TextColumn::make('division'),

                TextColumn::make('sort_order')
                    ->sortable(),

                IconColumn::make('is_active')
                    ->boolean(),

            ]);
    }
}