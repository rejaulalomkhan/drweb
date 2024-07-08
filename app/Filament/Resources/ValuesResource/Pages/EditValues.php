<?php

namespace App\Filament\Resources\ValuesResource\Pages;

use App\Filament\Resources\ValuesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditValues extends EditRecord
{
    protected static string $resource = ValuesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
