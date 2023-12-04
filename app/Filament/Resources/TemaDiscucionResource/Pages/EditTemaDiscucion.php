<?php

namespace App\Filament\Resources\TemaDiscucionResource\Pages;

use App\Filament\Resources\TemaDiscucionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTemaDiscucion extends EditRecord
{
    protected static string $resource = TemaDiscucionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
