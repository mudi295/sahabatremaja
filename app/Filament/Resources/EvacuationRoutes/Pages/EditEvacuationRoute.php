<?php

namespace App\Filament\Resources\EvacuationRoutes\Pages;

use App\Filament\Resources\EvacuationRoutes\EvacuationRouteResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditEvacuationRoute extends EditRecord
{
    protected static string $resource = EvacuationRouteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
