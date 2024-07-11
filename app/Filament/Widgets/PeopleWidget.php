<?php

namespace App\Filament\Widgets;

use App\Models\News;
use App\Models\Peoples;
use App\Models\Publications;
use App\Models\ResearchContent;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PeopleWidget extends BaseWidget
{

    protected static bool $isLazy = false;
    protected function getStats(): array
    {
        return [
            Stat::make('Research', ResearchContent::count())
                ->description('All Our Researches')
                ->descriptionIcon('heroicon-o-light-bulb', IconPosition::Before)
                ->color('success')
                ->icon('heroicon-o-light-bulb')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->extraAttributes([
                    'class' => 'cursor-pointer',
                    'onclick' => "window.location.href = '/admin/research-contents'",
                ]),
            Stat::make('All News', News::count())
                ->description('All Our Newses')
                ->descriptionIcon('heroicon-o-newspaper', IconPosition::Before)
                ->color('info')
                ->icon('heroicon-o-newspaper')
                ->chart([7, 2, 10, 3, 15, 4, 49])
                ->extraAttributes([
                    'class' => 'cursor-pointer',
                    'onclick' => "window.location.href = '/admin/news'",
                ]),
            Stat::make('All People', Peoples::count())
                ->description('All Our Peoples')
                ->descriptionIcon('heroicon-o-user-group', IconPosition::Before)
                ->color('danger')
                ->icon('heroicon-o-user-group')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->extraAttributes([
                    'class' => 'cursor-pointer',
                    'onclick' => "window.location.href = '/admin/peoples'",
                ]),
            Stat::make('Publications', Publications::count())
                ->description('All Publications')
                ->descriptionIcon('heroicon-o-user-group', IconPosition::Before)
                ->color('danger')
                ->icon('heroicon-o-user-group')
                ->chart([17, 2, 10, 3, 15, 4, 17])
                ->extraAttributes([
                    'class' => 'cursor-pointer',
                    'onclick' => "window.location.href = '/admin/publications'",
                ]),


        ];
    }
}
