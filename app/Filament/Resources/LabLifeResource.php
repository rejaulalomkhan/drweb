<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LabLifeResource\Pages;
use App\Filament\Resources\LabLifeResource\RelationManagers;
use App\Models\LabLife;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LabLifeResource extends Resource
{
    protected static ?string $model = LabLife::class;

    protected static ?string $navigationGroup = 'Other Pages';
    //navigation title

    protected static ?int $navigationSort = 5;
    protected static ?string $navigationLabel = 'Lab Life';
    protected static ?string $navigationIcon = 'heroicon-o-beaker';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->maxLength(30)
                    ->default(null),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->label('Lab Image')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
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
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListLabLives::route('/'),
            'create' => Pages\CreateLabLife::route('/create'),
            'edit' => Pages\EditLabLife::route('/{record}/edit'),
        ];
    }
}
