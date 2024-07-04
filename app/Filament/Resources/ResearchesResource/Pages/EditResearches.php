<?php

namespace App\Filament\Resources\ResearchesResource\Pages;

use App\Filament\Resources\ResearchesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditResearches extends EditRecord
{
    protected static string $resource = ResearchesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
