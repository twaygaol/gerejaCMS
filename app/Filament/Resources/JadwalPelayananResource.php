<?php
namespace App\Filament\Resources;

use App\Filament\Resources\JadwalPelayananResource\Pages;
use App\Models\JadwalPelayanan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\DateTimeColumn;

class JadwalPelayananResource extends Resource
{
    protected static ?string $model = JadwalPelayanan::class;

    protected static ?string $navigationGroup = 'Warta Gereja';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('namaPelayanan')
                    ->required()
                    ->label('Nama Pelayanan'),

                Forms\Components\DateTimePicker::make('jdwlMulai')
                    ->required()
                    ->label('Jadwal Mulai'),

                Forms\Components\DateTimePicker::make('jdwlSelesai')
                    ->required()
                    ->label('Jadwal Selesai'),

                Forms\Components\Select::make('pelayan')
                    ->relationship('pengurus', 'nama') // Menampilkan nama pengurus dalam dropdown
                    ->label('Pelayan')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('namaPelayanan')
                    ->label('Nama Pelayanan')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('jdwlMulai')
                    ->label('Jadwal Mulai')
                    ->sortable(),

                TextColumn::make('jdwlSelesai')
                    ->label('Jadwal Selesai')
                    ->sortable(),
                TextColumn::make('pengurus.nama')
                    ->label('Pelayan'),
            ])
            ->filters([
                // Filters can be added here if needed
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
            'index' => Pages\ListJadwalPelayanans::route('/'),
            'create' => Pages\CreateJadwalPelayanan::route('/create'),
            'edit' => Pages\EditJadwalPelayanan::route('/{record}/edit'),
        ];
    }
}
