<?php

namespace App\Filament\Resources\FeaturedPeopleResource\Pages;

use App\Filament\Resources\FeaturedPeopleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFeaturedPeople extends ListRecords
{
    protected static string $resource = FeaturedPeopleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    
}
