<?php

namespace App\Filament\Resources\BaptisResource\Pages;

use App\Filament\Resources\BaptisResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBaptis extends EditRecord
{
    protected static string $resource = BaptisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
