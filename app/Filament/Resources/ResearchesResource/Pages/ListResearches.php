<?php

namespace App\Filament\Resources\ResearchesResource\Pages;

use App\Filament\Resources\ResearchesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListResearches extends ListRecords
{
    protected static string $resource = ResearchesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
