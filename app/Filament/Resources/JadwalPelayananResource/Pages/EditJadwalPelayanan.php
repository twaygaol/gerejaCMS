<?php

namespace App\Filament\Resources\JadwalPelayananResource\Pages;

use App\Filament\Resources\JadwalPelayananResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJadwalPelayanan extends EditRecord
{
    protected static string $resource = JadwalPelayananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
