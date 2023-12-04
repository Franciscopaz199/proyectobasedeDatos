<?php

namespace App\Filament\Resources\EstadoRecursoResource\Pages;

use App\Filament\Resources\EstadoRecursoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEstadoRecurso extends EditRecord
{
    protected static string $resource = EstadoRecursoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
