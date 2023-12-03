<?php

namespace App\Filament\Resources\ClaseCarreraResource\Pages;

use App\Filament\Resources\ClaseCarreraResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListClaseCarreras extends ListRecords
{
    protected static string $resource = ClaseCarreraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
