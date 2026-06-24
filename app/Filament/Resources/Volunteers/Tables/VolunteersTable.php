<?php

namespace App\Filament\Resources\Volunteers\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class VolunteersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('name')
                    ->searchable(),

                TextColumn::make('email')
                    ->searchable(),

                TextColumn::make('phone'),

                TextColumn::make('city'),

                TextColumn::make('skills')
                    ->limit(30),

                TextColumn::make('status')
                    ->badge(),

                TextColumn::make('created_at')
                    ->dateTime('d M Y'),
            ]);
    }
}