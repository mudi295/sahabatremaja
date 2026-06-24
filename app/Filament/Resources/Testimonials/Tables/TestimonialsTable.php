<?php

namespace App\Filament\Resources\Testimonials\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;

class TestimonialsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                ImageColumn::make('photo'),

                TextColumn::make('name')
                    ->searchable(),

                TextColumn::make('position'),

                TextColumn::make('message')
                    ->limit(50),

                IconColumn::make('is_active')
                    ->boolean(),

                TextColumn::make('created_at')
                    ->dateTime('d M Y'),
            ]);
    }
}