<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\FeaturedPeople;
use Filament\Resources\Resource;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\FeaturedPeopleResource\Pages;
use App\Filament\Resources\FeaturedPeopleResource\RelationManagers;

class FeaturedPeopleResource extends Resource
{
    protected static ?string $model = FeaturedPeople::class;

    protected static ?string $navigationGroup = 'Peoples';
    protected static ?string $navigationLabel = 'Featured People';
    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                TextInput::make('designation'),
                TextInput::make('email'),
                FileUpload::make('image'),
                RichEditor::make('description')
                ->columnSpan(2),
                Toggle::make('status')
                                ->onIcon('heroicon-m-bolt')
                                ->offIcon('heroicon-m-user')
                                ->default(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('designation'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('description')
                    ->html()
                    ->limit(50),
                Tables\Columns\ToggleColumn::make('status')
                ->label('Is Published')
                ->onIcon('heroicon-m-bolt')
                ->offIcon('heroicon-m-user'),
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
            'index' => Pages\ListFeaturedPeople::route('/'),
            'create' => Pages\CreateFeaturedPeople::route('/create'),
            'edit' => Pages\EditFeaturedPeople::route('/{record}/edit'),
        ];
    }
}
