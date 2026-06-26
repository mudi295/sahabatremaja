<?php

namespace App\Filament\Resources\Profiles\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn; // Tambahkan import ini

class ProfilesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                
                // Menampilkan pratinjau gambar yang diunggah dari form
                ImageColumn::make('image')
                    ->label('Foto Profil')
                    ->circular() // Membuat bentuk lingkaran agar estetik
                    ->defaultImageUrl(url('/images/default-placeholder.png')), // Opsional, jika gambar kosong

                TextColumn::make('title')
                    ->label('Judul Utama')
                    ->searchable()
                    ->weight('bold'), // Menebalkan teks judul

                TextColumn::make('subtitle')
                    ->label('Sub-Judul')
                    ->limit(40)
                    ->color('gray'),

                // Menampilkan total dampak agar admin tahu angka yang sedang aktif
                TextColumn::make('impact_total')
                    ->label('Total Dampak')
                    ->badge() // Dibungkus dengan desain badge/kapsul
                    ->color('success'),

                TextColumn::make('created_at')
                    ->label('Dibuat Pada')
                    ->dateTime('d M Y')
                    ->toggleable(isToggledHiddenByDefault: true), // Menyembunyikan kolom ini secara default agar tabel bersih

            ]);
    }
}