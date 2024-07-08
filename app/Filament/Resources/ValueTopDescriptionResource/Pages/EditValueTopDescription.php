<?php

namespace App\Filament\Resources\ValueTopDescriptionResource\Pages;

use App\Filament\Resources\ValueTopDescriptionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditValueTopDescription extends EditRecord
{
    protected static string $resource = ValueTopDescriptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
