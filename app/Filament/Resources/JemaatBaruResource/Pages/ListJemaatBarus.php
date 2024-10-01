<?php

namespace App\Filament\Resources\JemaatBaruResource\Pages;

use App\Filament\Resources\JemaatBaruResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJemaatBarus extends ListRecords
{
    protected static string $resource = JemaatBaruResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
