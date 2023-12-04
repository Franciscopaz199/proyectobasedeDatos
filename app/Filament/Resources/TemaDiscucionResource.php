<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TemaDiscucionResource\Pages;
use App\Filament\Resources\TemaDiscucionResource\RelationManagers;
use App\Models\TemaDiscucion;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

//importar el select

use Filament\Forms\Components\Select;

use App\Models\Recurso;
use App\Models\EstadoTema;
use App\Models\Estudiante;
use App\Models\CategoriaTema;


class TemaDiscucionResource extends Resource
{
    protected static ?string $model = TemaDiscucion::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Recursos';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('id_recurso')
                    ->options(
                        Recurso::all()->pluck('titulo_recurso', 'id')
                    )
                    ->required(),
                Select::make('id_estado_tema')
                    ->options(
                        EstadoTema::all()->pluck('nombre_estado_tema', 'id')
                    )
                    ->required(),
                Select::make('id_categoria_tema')
                    ->options(
                        CategoriaTema::all()->pluck('nombre_categoria_tema', 'id')
                    )
                    ->required(),

                Select::make('id_estudiante')
                    ->options(
                        Estudiante::all()->pluck('user.name', 'id')
                    )
                    ->required(),
                Forms\Components\TextInput::make('titulo_tema')
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
                Tables\Columns\TextColumn::make('estadoTema.nombre_estado_tema')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('categoriaTema.nombre_categoria_tema')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('titulo_tema')
                    ->searchable(),

                Tables\Columns\TextColumn::make('estudiante.user.name')
                    ->label('Estudiante')
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
            RelationManagers\MensajesTemasRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTemaDiscucions::route('/'),
            'create' => Pages\CreateTemaDiscucion::route('/create'),
            'edit' => Pages\EditTemaDiscucion::route('/{record}/edit'),
        ];
    }
}
