<?php

namespace App\Filament\Resources\UserPermisoResource\Pages;

use App\Filament\Resources\UserPermisoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserPermisos extends ListRecords
{
    protected static string $resource = UserPermisoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
