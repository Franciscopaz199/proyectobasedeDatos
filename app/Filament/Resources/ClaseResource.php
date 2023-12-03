<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClaseResource\Pages;
use App\Filament\Resources\ClaseResource\RelationManagers;
use App\Models\Clase;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Departamento;
use Filament\Forms\Components\Select;
class ClaseResource extends Resource
{
    protected static ?string $model = Clase::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Universidades';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('id_departamento')
                    ->options(
                        Departamento::all()->pluck('nombre_departamento', 'id')
                    ),
                Forms\Components\TextInput::make('codigo_clase')
                    ->required()
                    ->maxLength(6),
                Forms\Components\TextInput::make('nombre_clase')
                    ->required()
                    ->maxLength(60),
                Forms\Components\TextInput::make('uv')
                    ->required()
                    ->maxLength(60),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('departamento.nombre_departamento')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('codigo_clase')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nombre_clase')
                    ->searchable(),
                Tables\Columns\TextColumn::make('uv')
                    ->searchable(),
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
            'index' => Pages\ListClases::route('/'),
            'create' => Pages\CreateClase::route('/create'),
            'edit' => Pages\EditClase::route('/{record}/edit'),
        ];
    }
}
