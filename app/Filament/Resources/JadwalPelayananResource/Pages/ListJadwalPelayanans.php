<?php

namespace App\Filament\Resources\JadwalPelayananResource\Pages;

use App\Filament\Resources\JadwalPelayananResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJadwalPelayanans extends ListRecords
{
    protected static string $resource = JadwalPelayananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
