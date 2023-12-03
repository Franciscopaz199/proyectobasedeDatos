<?php

namespace App\Filament\Resources\UniversidadResource\Pages;

use App\Filament\Resources\UniversidadResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUniversidad extends EditRecord
{
    protected static string $resource = UniversidadResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
