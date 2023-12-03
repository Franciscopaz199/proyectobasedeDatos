<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UniversidadResource\Pages;
use App\Filament\Resources\UniversidadResource\RelationManagers;
use App\Models\Universidad;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
 


class UniversidadResource extends Resource
{
    protected static ?string $model = Universidad::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Universidades';
    // 
    //  $table->string('nombre_universidad', 60);
    // $table->string('logo', 100);
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre_universidad')
                ->required()
                ->maxLength(255)
                ->columnSpan('full'),
                Forms\Components\TextInput::make('logo')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nombre_universidad')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('logo')
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
            'index' => Pages\ListUniversidads::route('/'),
            'create' => Pages\CreateUniversidad::route('/create'),
            'edit' => Pages\EditUniversidad::route('/{record}/edit'),
        ];
    }
}
