<?php

namespace App\Filament\Resources\ResearchContentResource\Pages;

use App\Filament\Resources\ResearchContentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditResearchContent extends EditRecord
{
    protected static string $resource = ResearchContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
