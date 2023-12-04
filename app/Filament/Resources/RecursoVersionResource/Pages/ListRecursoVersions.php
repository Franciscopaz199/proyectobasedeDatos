<?php

namespace App\Filament\Resources\RecursoVersionResource\Pages;

use App\Filament\Resources\RecursoVersionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRecursoVersions extends ListRecords
{
    protected static string $resource = RecursoVersionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
