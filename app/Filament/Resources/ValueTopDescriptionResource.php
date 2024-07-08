<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ValueTopDescriptionResource\Pages;
use App\Filament\Resources\ValueTopDescriptionResource\RelationManagers;
use App\Models\ValueTopDescription;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ValueTopDescriptionResource extends Resource
{
    protected static ?string $model = ValueTopDescription::class;

    protected static ?string $navigationGroup = 'Our Values';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                 Forms\Components\RichEditor::make('vTopDescription')
                    ->columnSpanFull()
                    ->label('Write your Value Top Description'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('vTopDescription')
                    ->html()
                    ->limit(50),
                Tables\Columns\TextColumn::make('created_at')
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
            'index' => Pages\ListValueTopDescriptions::route('/'),
            'create' => Pages\CreateValueTopDescription::route('/create'),
            'edit' => Pages\EditValueTopDescription::route('/{record}/edit'),
        ];
    }
}
