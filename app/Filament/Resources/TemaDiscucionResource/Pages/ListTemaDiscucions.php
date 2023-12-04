<?php

namespace App\Filament\Resources\TemaDiscucionResource\Pages;

use App\Filament\Resources\TemaDiscucionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTemaDiscucions extends ListRecords
{
    protected static string $resource = TemaDiscucionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
