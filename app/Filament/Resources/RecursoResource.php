<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RecursoResource\Pages;
use App\Filament\Resources\RecursoResource\RelationManagers;
use App\Models\Recurso;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use App\Models\ClaseCarrera;
use Filament\Forms\Components\Select;


class RecursoResource extends Resource
{
    protected static ?string $model = Recurso::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Recursos';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
               
                Forms\Components\TextInput::make('titulo_recurso')
                    ->required()
                    ->maxLength(60),
                Forms\Components\TextInput::make('fecha_subida')
                    ->required()
                    ->maxLength(60),

                    Select::make('id_estudiante')
                    ->relationship(name: 'autores', titleAttribute: 'numero_cuenta'),
                    //->multiple()

                    Select::make('id_clase_carrera')
                    ->relationship(name: 'clase_carrera', titleAttribute: 'id'),
                    //->multiple()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('clase_carrera.clase.nombre_clase')
                    ->sortable(),
                Tables\Columns\TextColumn::make('clase_carrera.carrera.nombre_carrera')
                    ->sortable(),
                   
                Tables\Columns\TextColumn::make('autores.user.name')
                    ->sortable(),


                Tables\Columns\TextColumn::make('titulo_recurso')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fecha_subida')
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
            RelationManagers\RecursoVersionRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRecursos::route('/'),
            'create' => Pages\CreateRecurso::route('/create'),
            'edit' => Pages\EditRecurso::route('/{record}/edit'),
        ];
    }
}
