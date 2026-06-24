<?php

namespace App\Filament\Resources\EvacuationRoutes\Pages;

use App\Filament\Resources\EvacuationRoutes\EvacuationRouteResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListEvacuationRoutes extends ListRecords
{
    protected static string $resource = EvacuationRouteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
