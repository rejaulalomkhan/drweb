<?php

namespace App\Filament\Resources\EunusAliResource\Pages;

use App\Filament\Resources\EunusAliResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEunusAlis extends ListRecords
{
    protected static string $resource = EunusAliResource::class;
    protected ?string $heading = 'Eunus Ali';
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
