<?php

namespace App\Filament\Resources;
use Filament\Forms\Form;
use App\Filament\Resources\ResearchResource\Pages;
use App\Filament\Resources\ResearchResource\RelationManagers;
use App\Filament\Resources\ResearchResource\Widgets\ResearchStatsOverview;
use App\Models\Research;
use Filament\Forms;

use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ResearchResource extends Resource
{
    protected static ?string $model = Research::class;


    protected static ?string $navigationGroup = 'Research';

    protected static ?string $navigationLabel = 'Research Page';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationIcon = 'heroicon-o-presentation-chart-line';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('page_title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('page_description')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('page_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('page_description')
                    ->limit(50),
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


    protected function getHeaderWidgets(): array
    {
        return [
            ResearchStatsOverview::class,
        ];
    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListResearch::route('/'),
            'create' => Pages\CreateResearch::route('/create'),
            'edit' => Pages\EditResearch::route('/{record}/edit'),
        ];
    }
}
