<?php

namespace App\Filament\Resources\ResearchResource\Pages;
use App\Filament\Resources\ResearchResource\Widgets\ResearchStatsOverview;
use Filament\Actions;

use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\ResearchResource;

class ListResearch extends ListRecords
{
    protected static string $resource = ResearchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            ResearchStatsOverview::class,
        ];
    }
}
