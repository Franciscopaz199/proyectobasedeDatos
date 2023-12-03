<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AutorRecursoResource\Pages;
use App\Filament\Resources\AutorRecursoResource\RelationManagers;
use App\Models\AutorRecurso;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AutorRecursoResource extends Resource
{
    protected static ?string $model = AutorRecurso::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Usuarios';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id_recurso')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('id_estudiante')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_recurso')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('id_estudiante')
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
            'index' => Pages\ListAutorRecursos::route('/'),
            'create' => Pages\CreateAutorRecurso::route('/create'),
            'edit' => Pages\EditAutorRecurso::route('/{record}/edit'),
        ];
    }
}
