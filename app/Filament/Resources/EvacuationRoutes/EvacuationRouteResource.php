<?php

namespace App\Filament\Resources\EvacuationRoutes;

use App\Filament\Resources\EvacuationRoutes\Pages\CreateEvacuationRoute;
use App\Filament\Resources\EvacuationRoutes\Pages\EditEvacuationRoute;
use App\Filament\Resources\EvacuationRoutes\Pages\ListEvacuationRoutes;
use App\Filament\Resources\EvacuationRoutes\Schemas\EvacuationRouteForm;
use App\Filament\Resources\EvacuationRoutes\Tables\EvacuationRoutesTable;
use App\Models\EvacuationRoute;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EvacuationRouteResource extends Resource
{
    protected static ?string $model = EvacuationRoute::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Evacuation Routes';

    public static function form(Schema $schema): Schema
    {
        return EvacuationRouteForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EvacuationRoutesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListEvacuationRoutes::route('/'),
            'create' => CreateEvacuationRoute::route('/create'),
            'edit' => EditEvacuationRoute::route('/{record}/edit'),
        ];
    }
}
