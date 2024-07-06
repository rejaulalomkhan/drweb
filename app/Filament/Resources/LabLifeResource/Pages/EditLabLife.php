<?php

namespace App\Filament\Resources\LabLifeResource\Pages;

use App\Filament\Resources\LabLifeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLabLife extends EditRecord
{
    protected static string $resource = LabLifeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
