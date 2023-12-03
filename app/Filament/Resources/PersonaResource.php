<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PersonaResource\Pages;
use App\Filament\Resources\PersonaResource\RelationManagers;
use App\Models\Persona;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\Select;

use App\Models\Sexo;
use App\Models\Genero;
use App\Models\Ciudad;
use App\Models\EstadoCivil;


class PersonaResource extends Resource
{
    protected static ?string $model = Persona::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Usuarios';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('id_sexo')
                    ->options(
                        Sexo::all()->pluck('nombre_sexo', 'id')
                    ),
                
                Select::make('id_genero')
                    ->options(
                        Genero::all()->pluck('nombre_genero', 'id')
                    ),
                Select::make('id_ciudad')
                    ->options(
                        Ciudad::all()->pluck('nombre_ciudad', 'id')
                    ),
                Select::make('id_estado_civil')
                    ->options(
                        EstadoCivil::all()->pluck('nombre_estado_civil', 'id')
                    ),
                Forms\Components\TextInput::make('nombre')
                    ->required()
                    ->maxLength(60),
                Forms\Components\TextInput::make('apellido')
                    ->required()
                    ->maxLength(60),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('sexo.nombre_sexo')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('genero.nombre_genero')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ciudad.nombre_ciudad')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('estado_civil.nombre_estado_civil')
                    ->numeric()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('ciudad.pais.nombre_pais')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('apellido')
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
            'index' => Pages\ListPersonas::route('/'),
            'create' => Pages\CreatePersona::route('/create'),
            'edit' => Pages\EditPersona::route('/{record}/edit'),
        ];
    }
}
