<?php

namespace App\Filament\Resources\EvacuationRoutes\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Placeholder;

class EvacuationRouteForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Placeholder::make('info_route')
                    ->content('📍 INFORMASI JALUR EVAKUASI'),

                Grid::make(2)
                    ->schema([

                        TextInput::make('title')
                            ->label('Nama Jalur')
                            ->required()
                            ->maxLength(255),

                        Select::make('disaster_type')
                            ->label('Jenis Bencana')
                            ->options([
                                'tsunami' => '🌊 Tsunami',
                                'gempa'   => '🏚️ Gempa',
                                'banjir'  => '🌧️ Banjir',
                                'longsor' => '⛰️ Longsor',
                            ])
                            ->required(),

                    ]),

                Textarea::make('description')
                    ->label('Petunjuk Evakuasi')
                    ->rows(4)
                    ->columnSpanFull(),

                Placeholder::make('start_point')
                    ->content('🚨 TITIK AWAL BENCANA'),

                Grid::make(3)
                    ->schema([

                        TextInput::make('start_location')
                            ->label('Nama Lokasi Awal')
                            ->required(),

                        TextInput::make('start_lat')
                            ->label('Latitude')
                            ->numeric()
                            ->required(),

                        TextInput::make('start_lng')
                            ->label('Longitude')
                            ->numeric()
                            ->required(),

                    ]),

                Placeholder::make('safe_point')
                    ->content('✅ TITIK EVAKUASI AMAN'),

                Grid::make(3)
                    ->schema([

                        TextInput::make('safe_location')
                            ->label('Nama Lokasi Aman')
                            ->required(),

                        TextInput::make('safe_lat')
                            ->label('Latitude')
                            ->numeric()
                            ->required(),

                        TextInput::make('safe_lng')
                            ->label('Longitude')
                            ->numeric()
                            ->required(),

                    ]),

                Placeholder::make('additional_info')
                    ->content('ℹ️ INFORMASI TAMBAHAN'),

                Grid::make(2)
                    ->schema([

                        TextInput::make('estimated_time')
                            ->label('Estimasi Waktu')
                            ->numeric()
                            ->suffix('menit'),

                        Toggle::make('is_active')
                            ->label('Aktif')
                            ->default(true),

                    ]),

            ]);
    }
}