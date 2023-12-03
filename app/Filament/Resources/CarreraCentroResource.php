<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarreraCentroResource\Pages;
use App\Filament\Resources\CarreraCentroResource\RelationManagers;
use App\Models\CarreraCentro;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use App\Models\Universidad;
use App\Models\Carrera;
use App\Models\Centro;

use Filament\Forms\Components\Select;

class CarreraCentroResource extends Resource
{
    protected static ?string $model = CarreraCentro::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Universidades';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('id_centro')
                    ->options(
                        Centro::all()->pluck('nombre_centro', 'id')
                    ),
                Select::make('id_carrera')
                    ->options(
                        Carrera::all()->pluck('nombre_carrera', 'id')
                    ),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('carerra.nombre_carrera')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('centro.nombre_centro')
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
            'index' => Pages\ListCarreraCentros::route('/'),
            'create' => Pages\CreateCarreraCentro::route('/create'),
            'edit' => Pages\EditCarreraCentro::route('/{record}/edit'),
        ];
    }
}
