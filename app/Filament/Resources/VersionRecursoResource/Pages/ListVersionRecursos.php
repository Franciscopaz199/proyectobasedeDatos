<?php

namespace App\Filament\Resources\VersionRecursoResource\Pages;

use App\Filament\Resources\VersionRecursoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVersionRecursos extends ListRecords
{
    protected static string $resource = VersionRecursoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
