<?php

namespace App\Filament\Resources\ResearchContentResource\Pages;

use App\Filament\Resources\ResearchContentResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateResearchContent extends CreateRecord
{
    protected static string $resource = ResearchContentResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
