<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Settings;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\SettingsResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SettingsResource\RelationManagers;

class SettingsResource extends Resource
{
    protected static ?string $model = Settings::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make('Website Details')
                ->description('Add Website details')
                ->schema([
                            Forms\Components\TextInput::make('SiteName')
                            ->required()
                            ->maxLength(100),
                            Forms\Components\FileUpload::make('SiteLogo')
                            ->image()
                            ->required(),
                            Forms\Components\FileUpload::make('favicon')
                            ->image()
                            ->required(),
                            Forms\Components\RichEditor::make('SiteDescription')
                                ->required(),
                ])->columns(2),
                Section::make('Footer Info')
                ->description('Add Footer details')
                ->schema([
                            Forms\Components\TextInput::make('Email')
                            ->email()
                            ->columnSpan(1),
                            Forms\Components\TextInput::make('Phone')
                            ->placeholder('Number')
                            ->columnSpan(1),
                            Forms\Components\TextInput::make('PhoneOptional')
                                ->placeholder('Add 2nd Phone Number')
                                ->columnSpan(1),
                                Forms\Components\RichEditor::make('Address')
                                ->columnSpan(2),

                ])->columns(2),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('SiteName')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('SiteLogo'),
                Tables\Columns\ImageColumn::make('favicon'),
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
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSettings::route('/create'),
            'edit' => Pages\EditSettings::route('/{record}/edit'),
        ];
    }
}
