<?php

namespace App\Filament\Resources\FeaturedPeopleResource\Pages;

use App\Filament\Resources\FeaturedPeopleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFeaturedPeople extends EditRecord
{
    protected static string $resource = FeaturedPeopleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
