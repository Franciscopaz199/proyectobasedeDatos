<?php

namespace App\Filament\Resources\TemaDiscucionResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\MensajeTema;
use App\Models\Estudiante;
use Filament\Tables\Columns\TextColumn;




// importar el Select de Filament
use Filament\Forms\Components\Select;

class MensajesTemasRelationManager extends RelationManager
{
    protected static string $relationship = 'mensajesTemas';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('id_estudiante')
                    ->options(
                        Estudiante::all()->pluck('user.name', 'id')
                    )
                    ->required(),

                Forms\Components\TextInput::make('contenido_mensaje')
                    ->required()
                    ->maxLength(60),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('title')
            ->columns([

                TextColumn::make('contenido_mensaje')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('estudiante.user.name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('created_at')
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
