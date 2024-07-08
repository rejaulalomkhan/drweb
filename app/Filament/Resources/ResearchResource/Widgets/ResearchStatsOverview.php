<?php

namespace App\Filament\Resources\ResearchResource\Widgets;

use App\Models\Publications;
use App\Models\ResearchContent;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;


class ResearchStatsOverview extends BaseWidget
{
    protected static ?int $sort = -4;
    protected static bool $isLazy = false;
    protected function getStats(): array
    {
        return [
            Stat::make('All Researches', ResearchContent::count()),
            Stat::make('All Researches Content', ResearchContent::count()),
            Stat::make('All Our Publications', Publications::count()),
        ];
    }
}
