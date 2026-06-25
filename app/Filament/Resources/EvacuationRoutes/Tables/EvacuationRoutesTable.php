<?php

namespace App\Filament\Resources\EvacuationRoutes\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;

class EvacuationRoutesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('title')
                    ->searchable(),

                TextColumn::make('disaster_type')
                    ->badge(),

                TextColumn::make('safe_location'),

                TextColumn::make('estimated_time')
                    ->suffix(' menit'),

                IconColumn::make('is_active')
                    ->boolean(),

                TextColumn::make('created_at')
                    ->dateTime('d M Y'),
            ]);
    }
}