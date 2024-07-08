<?php

namespace App\Filament\Resources\EunusAliResource\Pages;

use App\Filament\Resources\EunusAliResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEunusAli extends CreateRecord
{
    protected static string $resource = EunusAliResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
