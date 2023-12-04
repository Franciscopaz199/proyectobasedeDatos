<?php

namespace App\Filament\Resources\RecursoVersionResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Estudiante;

use Filament\Forms\Components\Select;

class ComentariosRelationManager extends RelationManager
{
    protected static string $relationship = 'comentarios';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('id_estudiante')
                    ->options(
                        Estudiante::all()->pluck('user.name', 'id')
                    ),

                Forms\Components\TextInput::make('titulo_comentario')
                    ->required()
                    ->maxLength(60),

                Forms\Components\Textarea::make('contenido_comentario')
                    ->required()
                    ->maxLength(60),

            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('title')
            ->columns([
                Tables\Columns\TextColumn::make('estudiante.user.name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('titulo_comentario')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('contenido_comentario')
                    ->searchable()
                    ->sortable(),
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
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
