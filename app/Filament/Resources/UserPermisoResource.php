<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserPermisoResource\Pages;
use App\Filament\Resources\UserPermisoResource\RelationManagers;
use App\Models\UserPermiso;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\Select;

use App\Models\Permiso;
use App\Models\User;

class UserPermisoResource extends Resource
{
    protected static ?string $model = UserPermiso::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Roles y Permisos';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('id_user')
                    ->options(
                        User::all()->pluck('name', 'id')
                    )
                    ->required(),

                Select::make('id_permiso')
                    ->options(
                        Permiso::all()->pluck('nombre_permiso', 'id')
                    )
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
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
            'index' => Pages\ListUserPermisos::route('/'),
            'create' => Pages\CreateUserPermiso::route('/create'),
            'edit' => Pages\EditUserPermiso::route('/{record}/edit'),
        ];
    }
}
