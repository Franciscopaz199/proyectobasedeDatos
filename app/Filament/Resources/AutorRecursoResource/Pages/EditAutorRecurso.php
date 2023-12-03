<?php

namespace App\Filament\Resources\AutorRecursoResource\Pages;

use App\Filament\Resources\AutorRecursoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAutorRecurso extends EditRecord
{
    protected static string $resource = AutorRecursoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
