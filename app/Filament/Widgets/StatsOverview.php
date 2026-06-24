<?php

namespace App\Filament\Widgets;

use App\Models\Article;
use App\Models\Program;
use App\Models\Gallery;
use App\Models\Volunteer;
use App\Models\Contact;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Artikel', Article::count())
                ->description('Total Artikel')
                ->descriptionIcon('heroicon-m-document-text'),

            Stat::make('Program', Program::count())
                ->description('Total Program')
                ->descriptionIcon('heroicon-m-calendar'),

            Stat::make('Galeri', Gallery::count())
                ->description('Total Foto')
                ->descriptionIcon('heroicon-m-photo'),

            Stat::make('Relawan', Volunteer::count())
                ->description('Total Relawan')
                ->descriptionIcon('heroicon-m-users'),

            Stat::make('Pesan Masuk', Contact::count())
                ->description('Total Kontak')
                ->descriptionIcon('heroicon-m-envelope'),
        ];
    }
}