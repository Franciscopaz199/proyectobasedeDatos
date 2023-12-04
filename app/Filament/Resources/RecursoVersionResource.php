<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RecursoVersionResource\Pages;
use App\Filament\Resources\RecursoVersionResource\RelationManagers;
use App\Models\RecursoVersion;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RecursoVersionResource extends Resource
{
    protected static ?string $model = RecursoVersion::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Recursos';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id_recurso')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('id_version_recurso')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('id_estado_recurso')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('enlace_descarga')
                    ->required()
                    ->maxLength(60),
                Forms\Components\TextInput::make('descripcion')
                    ->required()
                    ->maxLength(60),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('recurso.titulo_recurso')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('versionRecurso.nombre_version_recurso')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('estadoRecurso.nombre_estado_recurso')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('enlace_descarga')
                    ->searchable(),
                Tables\Columns\TextColumn::make('descripcion')
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
            RelationManagers\ComentariosRelationManager::class,
            RelationManagers\SugerenciasRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRecursoVersions::route('/'),
            'create' => Pages\CreateRecursoVersion::route('/create'),
            'edit' => Pages\EditRecursoVersion::route('/{record}/edit'),
        ];
    }
}
