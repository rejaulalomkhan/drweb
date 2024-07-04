<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Researches;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ResearchesResource\Pages;
use App\Filament\Resources\ResearchesResource\RelationManagers;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;

class ResearchesResource extends Resource
{
    protected static ?string $model = Researches::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('page_title')->required(),
                TextInput::make('page_description')->required(),
                TextInput::make('icon_class'),
                TextInput::make('icon_title')->required(),
                TextInput::make('icon_section_id')
                ->label('Section ID')
                ->required(),
                TextInput::make('section_id')
                ->label('ID Same as Section ID')->required(),
                TextInput::make('section_title')->required(),
                FileUpload::make('section_image'),
                RichEditor::make('section_description')
                ->columnSpan(2)
                ->required(),
                Select::make('status')
                ->label('Status- Active or Inactive')
                ->options([
                    1 => 'Active',
                    0 => 'Inactive',
                ])
                ->default(1),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('page_title'),
                TextColumn::make('page_description'),
                TextColumn::make('icon_class'),
                TextColumn::make('icon_title'),
                TextColumn::make('icon_section_id'),
                TextColumn::make('section_id'),
                TextColumn::make('section_title'),
                TextColumn::make('section_image'),
                TextColumn::make('section_description'),
                TextColumn::make('status'),
                
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListResearches::route('/'),
            'create' => Pages\CreateResearches::route('/create'),
            'view' => Pages\ViewResearches::route('/{record}'),
            'edit' => Pages\EditResearches::route('/{record}/edit'),
        ];
    }
}
