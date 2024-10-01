<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JemaatBaruResource\Pages;
use App\Models\JemaatBaru;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;

class JemaatBaruResource extends Resource
{
    protected static ?string $model = JemaatBaru::class;

    protected static ?string $navigationGroup = 'Data Pendaftaran';

    protected static ?string $navigationLabel = 'Jemaat';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->required()
                    ->label('Nama'),

                Forms\Components\Select::make('jenis_kelamin')
                    ->options([
                        'L' => 'Laki-laki',
                        'P' => 'Perempuan',
                    ])
                    ->required()
                    ->label('Jenis Kelamin'),

                TextInput::make('tempat_lahir')
                    ->required()
                    ->label('Tempat Lahir'),

                DatePicker::make('tgl_lahir')
                    ->required()
                    ->label('Tanggal Lahir'),

                Textarea::make('alamat')
                    ->required()
                    ->label('Alamat'),

                TextInput::make('no_telp')
                    ->numeric()
                    ->required()
                    ->label('Nomor Telepon'),

                Forms\Components\Toggle::make('pindah_gereja')
                    ->label('Pindah Gereja'),

                Forms\Components\Toggle::make('pindah_kota')
                    ->label('Pindah Kota'),

                TextInput::make('status')
                    ->required()
                    ->label('Status'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('nama')
                    ->label('Nama')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('jenis_kelamin')
                    ->label('Jenis Kelamin')
                    ->sortable(),

                TextColumn::make('tempat_lahir')
                    ->label('Tempat Lahir')
                    ->sortable(),

                TextColumn::make('tgl_lahir')
                    ->label('Tanggal Lahir')
                    ->date()
                    ->sortable(),

                TextColumn::make('alamat')
                    ->label('Alamat')
                    ->sortable()
                    ->limit(50), // Limit the text length in the table view

                TextColumn::make('no_telp')
                    ->label('Nomor Telepon')
                    ->sortable(),

                BooleanColumn::make('pindah_gereja')
                    ->label('Pindah Gereja'),

                BooleanColumn::make('pindah_kota')
                    ->label('Pindah Kota'),

                TextColumn::make('status')
                    ->label('Status')
                    ->sortable(),
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
            'index' => Pages\ListJemaatBarus::route('/'),
            'create' => Pages\CreateJemaatBaru::route('/create'),
            'edit' => Pages\EditJemaatBaru::route('/{record}/edit'),
        ];
    }
}
