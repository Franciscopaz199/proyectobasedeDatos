<?php

namespace App\Filament\Resources\RolPermisoResource\Pages;

use App\Filament\Resources\RolPermisoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRolPermiso extends EditRecord
{
    protected static string $resource = RolPermisoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
