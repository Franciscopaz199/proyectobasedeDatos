<?php

namespace App\Filament\Resources\RecursoResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
 


use Filament\Forms\Components\Select;
use App\Models\VersionRecurso;
use App\Models\EstadoRecurso;

use Filament\Forms\Components\TextInput;


class RecursoVersionRelationManager extends RelationManager
{
    protected static string $relationship = 'RecursoVersion';
    

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('id_version_recurso')
                    ->options(
                        VersionRecurso::all()->pluck('nombre_version_recurso', 'id')
                    ),

                Select::make('id_estado_recurso')
                    ->options(
                        EstadoRecurso::all()->pluck('nombre_estado_recurso', 'id')
                    ),
                TextInput::make('enlace_descarga'),
                TextInput::make('descripcion'),

            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('ComentarioAutor')
            ->columns([
                TextColumn::make('id_version_recurso')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('id_estado_recurso')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('enlace_descarga')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('descripcion')
                
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make(),
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

}
