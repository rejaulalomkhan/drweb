<?php

namespace App\Filament\Resources\FeaturedPeopleResource\Pages;

use App\Filament\Resources\FeaturedPeopleResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFeaturedPeople extends CreateRecord
{
    protected static string $resource = FeaturedPeopleResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
