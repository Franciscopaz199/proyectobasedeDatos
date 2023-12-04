<?php

namespace App\Filament\Resources\EstadoTemaResource\Pages;

use App\Filament\Resources\EstadoTemaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEstadoTema extends EditRecord
{
    protected static string $resource = EstadoTemaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
