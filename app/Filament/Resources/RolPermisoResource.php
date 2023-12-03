<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RolPermisoResource\Pages;
use App\Filament\Resources\RolPermisoResource\RelationManagers;
use App\Models\RolPermiso;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use App\Models\Permiso;
use App\Models\Rol;

use Filament\Forms\Components\Select;

class RolPermisoResource extends Resource
{
    protected static ?string $model = RolPermiso::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Roles y Permisos';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('id_rol')
                    ->options(
                        Rol::all()->pluck('nombre_rol', 'id')
                    ),
                Select::make('id_permiso')
                    ->options(
                        Permiso::all()->pluck('nombre_permiso', 'id')
                    )
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('rol.nombre_rol')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('permiso.nombre_permiso')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRolPermisos::route('/'),
            'create' => Pages\CreateRolPermiso::route('/create'),
            'edit' => Pages\EditRolPermiso::route('/{record}/edit'),
        ];
    }
}
