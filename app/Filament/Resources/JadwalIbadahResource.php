<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JadwalIbadahResource\Pages;
use App\Models\JadwalIbadah;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\DateTimeColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;

class JadwalIbadahResource extends Resource
{
    protected static ?string $model = JadwalIbadah::class;

    protected static ?string $navigationGroup = 'Warta Gereja';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('jenis_ibadah')
                    ->required()
                    ->options([
                        'Kebaktian Minggu' => 'Kebaktian Minggu',
                        'Doa Pagi' => 'Doa Pagi',
                        'Persekutuan' => 'Persekutuan',
                        'Acara Khusus' => 'Acara Khusus',
                    ])
                    ->label('Jenis Ibadah'),

                Select::make('hari')
                    ->required()
                    ->options([
                        'Senin' => 'Senin',
                        'Selasa' => 'Selasa',
                        'Rabu' => 'Rabu',
                        'Kamis' => 'Kamis',
                        'Jumat' => 'Jumat',
                        'Sabtu' => 'Sabtu',
                        'Minggu' => 'Minggu',
                    ])
                    ->label('Hari'),

                DateTimePicker::make('waktu_mulai')
                    ->required()
                    ->label('Waktu Mulai'),

                DateTimePicker::make('waktu_selesai')
                    ->required()
                    ->label('Waktu Selesai'),

                TextInput::make('tempat')
                    ->required()
                    ->label('Tempat'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('jenis_ibadah')
                    ->label('Jenis Ibadah'),

                TextColumn::make('hari')
                    ->label('Hari'),

                TextColumn::make('waktu_mulai')
                    ->label('Waktu Mulai')
                    ->sortable(),

                TextColumn::make('waktu_selesai')
                    ->label('Waktu Selesai')
                    ->sortable(),

                TextColumn::make('tempat')
                    ->label('Tempat'),

               
            ])
            ->filters([
                // Define filters if needed
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Define relationships if needed
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJadwalIbadahs::route('/'),
            'create' => Pages\CreateJadwalIbadah::route('/create'),
            'edit' => Pages\EditJadwalIbadah::route('/{record}/edit'),
        ];
    }
}
