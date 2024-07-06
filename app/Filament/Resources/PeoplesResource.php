<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PeoplesResource\Pages;
use App\Filament\Resources\PeoplesResource\RelationManagers;
use App\Models\Peoples;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PeoplesResource extends Resource
{
    protected static ?string $model = Peoples::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

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
            'index' => Pages\ListPeoples::route('/'),
            'create' => Pages\CreatePeoples::route('/create'),
            'edit' => Pages\EditPeoples::route('/{record}/edit'),
        ];
    }
}
