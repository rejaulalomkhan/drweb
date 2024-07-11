<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EunusAliResource\Pages;
use App\Filament\Resources\EunusAliResource\RelationManagers;
use App\Models\EunusAli;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EunusAliResource extends Resource
{
    protected static ?string $model = EunusAli::class;
    protected static ?string $navigationGroup = 'Other Pages';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationLabel = 'Eunus Ali';
    protected static ?string $navigationIcon = 'heroicon-o-user-circle';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->required(),
                Forms\Components\RichEditor::make('description')
                    ->columnSpanFull()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('description')
                    ->html()
                    ->limit(20),
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
            'index' => Pages\ListEunusAlis::route('/'),
            'create' => Pages\CreateEunusAli::route('/create'),
            'edit' => Pages\EditEunusAli::route('/{record}/edit'),
        ];
    }
}
