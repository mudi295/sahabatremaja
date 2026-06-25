<?php

namespace App\Filament\Resources\Statistics\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;

class StatisticsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('icon'),

                TextColumn::make('value'),

                TextColumn::make('title'),

                IconColumn::make('is_active')
                    ->boolean(),

                TextColumn::make('sort_order'),

            ]);
    }
}