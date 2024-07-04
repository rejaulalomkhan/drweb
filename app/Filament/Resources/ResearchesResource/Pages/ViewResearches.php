<?php

namespace App\Filament\Resources\ResearchesResource\Pages;

use App\Filament\Resources\ResearchesResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewResearches extends ViewRecord
{
    protected static string $resource = ResearchesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
