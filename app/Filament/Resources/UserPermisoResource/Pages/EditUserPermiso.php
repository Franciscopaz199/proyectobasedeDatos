<?php

namespace App\Filament\Resources\UserPermisoResource\Pages;

use App\Filament\Resources\UserPermisoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserPermiso extends EditRecord
{
    protected static string $resource = UserPermisoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
