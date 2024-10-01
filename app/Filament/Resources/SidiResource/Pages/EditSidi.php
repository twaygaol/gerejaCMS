<?php

namespace App\Filament\Resources\SidiResource\Pages;

use App\Filament\Resources\SidiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSidi extends EditRecord
{
    protected static string $resource = SidiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
