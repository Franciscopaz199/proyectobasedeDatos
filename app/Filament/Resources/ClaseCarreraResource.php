<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClaseCarreraResource\Pages;
use App\Filament\Resources\ClaseCarreraResource\RelationManagers;
use App\Models\ClaseCarrera;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use App\Models\Clase;
use App\Models\Carrera;



use Filament\Forms\Components\Select;

class ClaseCarreraResource extends Resource
{
    protected static ?string $model = ClaseCarrera::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Universidades';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('id_clase')
                    ->required()
                ->options(
                    Clase::all()->pluck('nombre_clase', 'id')
                ),
                Select::make('id_carrera')
                    ->required()
                ->options(
                    Carrera::all()->pluck('nombre_carrera', 'id')
                ),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('clase.nombre_clase')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('carrera.nombre_carrera')
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
            'index' => Pages\ListClaseCarreras::route('/'),
            'create' => Pages\CreateClaseCarrera::route('/create'),
            'edit' => Pages\EditClaseCarrera::route('/{record}/edit'),
        ];
    }
}
