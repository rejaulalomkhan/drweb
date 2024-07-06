<?php

namespace App\Filament\Resources\LabLifeResource\Pages;

use App\Filament\Resources\LabLifeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLabLives extends ListRecords
{
    protected static string $resource = LabLifeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
