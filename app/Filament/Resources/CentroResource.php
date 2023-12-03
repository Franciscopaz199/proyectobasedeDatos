<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CentroResource\Pages;
use App\Filament\Resources\CentroResource\RelationManagers;
use App\Models\Centro;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Universidad;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class CentroResource extends Resource
{
    protected static ?string $model = Centro::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Universidades';
    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('id_universidad')
                    ->options(
                        Universidad::all()->pluck('nombre_universidad', 'id')
                    ),
                TextInput::make('nombre_centro'),
                TextInput::make('correo_electronico'),
                TextInput::make('direccion'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('nombre_centro')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('correo_electronico')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('direccion')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('universidad.nombre_universidad')
                    ->searchable()
                    ->sortable(),
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
            'index' => Pages\ListCentros::route('/'),
            'create' => Pages\CreateCentro::route('/create'),
            'edit' => Pages\EditCentro::route('/{record}/edit'),
        ];
    }
}
