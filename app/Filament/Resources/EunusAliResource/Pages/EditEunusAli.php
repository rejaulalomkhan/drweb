<?php

namespace App\Filament\Resources\EunusAliResource\Pages;

use App\Filament\Resources\EunusAliResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEunusAli extends EditRecord
{
    protected static string $resource = EunusAliResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
