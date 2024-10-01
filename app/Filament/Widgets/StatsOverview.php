<?php

namespace App\Filament\Widgets;

use App\Models\baptis;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Siswa;
use App\Models\Guru;
use App\Models\jemaatBaru;
use App\Models\Pengurus;
use App\Models\pernikahan;
use App\Models\sidi;
use App\Models\Walikelas;

class StatsOverview extends BaseWidget
{

    protected static ?string $pollingInterval = null ;

    protected function getStats(): array

    {
        return [
         Stat::make('Total Jemaat', jemaatBaru::count())
            ->description('Data Jemaat Terdaftar')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('success')
            ->chart([7, 3, 4, 5, 6, 3, 5, 3]),
         Stat::make('Total Pelayan', Pengurus::count())
            ->description('Data Pelayan Gereja')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('danger')
            ->chart([7, 3, 4, 5, 6, 3, 5, 3]),
        Stat::make('Total Jemaat', pernikahan::count())
            ->description('Data Jemaat Terdaftar')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('success')
            ->chart([7, 3, 4, 5, 6, 3, 5, 3]),
         Stat::make('Total Pelayan', baptis::count())
            ->description('Data Pelayan Gereja')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('danger')
            ->chart([7, 3, 4, 5, 6, 3, 5, 3]),
         Stat::make('Total Sidi', sidi::count())
            ->description('Data Sidi')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->color('primary')
            ->chart([7, 3, 4, 5, 6, 3, 5, 3]),

        ];
    }
}
