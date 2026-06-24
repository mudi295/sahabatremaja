<?php

namespace App\Filament\Resources\Abouts\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class AboutsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('title')
                    ->searchable(),

                TextColumn::make('subtitle')
                    ->limit(40),

                TextColumn::make('created_at')
                    ->dateTime('d M Y'),

            ]);
    }
}