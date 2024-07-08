<?php

namespace App\Filament\Resources\LabLifeResource\Pages;

use App\Filament\Resources\LabLifeResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLabLife extends CreateRecord
{
    protected static string $resource = LabLifeResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
