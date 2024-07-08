<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use App\Models\ResearchContent;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use App\Filament\Resources\ResearchContentResource\Pages;

class ResearchContentResource extends Resource
{
    public static function getNavigationBadge(): ?string
        {
            return static::getModel()::count();
        }
    protected static ?string $model = ResearchContent::class;
    protected static ?string $navigationGroup = 'Research';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationIcon = 'heroicon-o-presentation-chart-bar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Block Details')
                ->description('Add block details')
                ->schema([
                            Forms\Components\TextInput::make('block_title')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\FileUpload::make('block_image')
                            ->image()
                            ->required(),
                ])->columns(2),

                Section::make('Section Details')
                ->description('Add Section details')
                ->schema([
                            Forms\Components\TextInput::make('section_title')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\FileUpload::make('section_image')
                                ->image()
                                ->required(),
                            Forms\Components\RichEditor::make('section_description')
                                ->required()
                                ->columnSpanFull(),
                            Forms\Components\Toggle::make('status')
                                ->onIcon('heroicon-m-bolt')
                                ->offIcon('heroicon-m-user')
                                ->default(1),
                ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('block_title')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('block_image'),
                Tables\Columns\TextColumn::make('section_title')
                    ->searchable()
                    ->limit(20),
                Tables\Columns\TextColumn::make('section_description')
                    ->html()
                    ->limit(50) // You can limit the displayed content length for better readability
                    ->wrap()
                    ->sortable()
                    ->searchable(),
                Tables\Columns\ImageColumn::make('section_image'),
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
            'index' => Pages\ListResearchContents::route('/'),
            'create' => Pages\CreateResearchContent::route('/create'),
            'edit' => Pages\EditResearchContent::route('/{record}/edit'),
        ];
    }
}
