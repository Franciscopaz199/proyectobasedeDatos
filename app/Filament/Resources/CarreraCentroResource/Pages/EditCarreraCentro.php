<?php

namespace App\Filament\Resources\CarreraCentroResource\Pages;

use App\Filament\Resources\CarreraCentroResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCarreraCentro extends EditRecord
{
    protected static string $resource = CarreraCentroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
