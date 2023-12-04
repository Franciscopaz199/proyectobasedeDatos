<?php

namespace App\Filament\Resources\VersionRecursoResource\Pages;

use App\Filament\Resources\VersionRecursoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVersionRecurso extends EditRecord
{
    protected static string $resource = VersionRecursoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
