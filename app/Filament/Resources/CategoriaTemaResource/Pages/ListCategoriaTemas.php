<?php

namespace App\Filament\Resources\CategoriaTemaResource\Pages;

use App\Filament\Resources\CategoriaTemaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCategoriaTemas extends ListRecords
{
    protected static string $resource = CategoriaTemaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
