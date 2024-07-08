<?php

namespace App\Filament\Resources\LabLifeResource\Pages;

use App\Filament\Resources\LabLifeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLabLives extends ListRecords
{
    protected static string $resource = LabLifeResource::class;

    // title label change
    protected ?string $heading = 'Social / Lab Life';
    protected static ?string $slug = 'lab-life';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
