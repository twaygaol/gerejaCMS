<?php

namespace App\Filament\Resources\JemaatBaruResource\Pages;

use App\Filament\Resources\JemaatBaruResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJemaatBaru extends EditRecord
{
    protected static string $resource = JemaatBaruResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
