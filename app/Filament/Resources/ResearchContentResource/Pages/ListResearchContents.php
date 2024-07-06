<?php

namespace App\Filament\Resources\ResearchContentResource\Pages;

use App\Filament\Resources\ResearchContentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListResearchContents extends ListRecords
{
    protected static string $resource = ResearchContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
