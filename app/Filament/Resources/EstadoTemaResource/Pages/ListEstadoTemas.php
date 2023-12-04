<?php

namespace App\Filament\Resources\EstadoTemaResource\Pages;

use App\Filament\Resources\EstadoTemaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEstadoTemas extends ListRecords
{
    protected static string $resource = EstadoTemaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
