<?php

namespace App\Filament\Resources\AutorRecursoResource\Pages;

use App\Filament\Resources\AutorRecursoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAutorRecursos extends ListRecords
{
    protected static string $resource = AutorRecursoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
