<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BaptisResource\Pages;
use App\Models\Baptis;
use Barryvdh\DomPDF\Facade\Pdf; // Add this for PDF generation
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\DateColumn;
use Filament\Tables\Actions\Action;

class BaptisResource extends Resource
{
    protected static ?string $model = Baptis::class;

    protected static ?string $navigationGroup = 'Data Pendaftaran';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id_jemaat')
                    ->required()
                    ->label('ID Jemaat'),

                Forms\Components\TextInput::make('nama_baptis')
                    ->required()
                    ->label('Nama Baptis'),

                Forms\Components\Select::make('jenis_kelamin')
                    ->required()
                    ->options([
                        'L' => 'Laki-laki',
                        'P' => 'Perempuan',
                    ])
                    ->label('Jenis Kelamin'),

                Forms\Components\DatePicker::make('tg_lahir')
                    ->required()
                    ->label('Tanggal Lahir'),

                Forms\Components\TextInput::make('nama_ayah')
                    ->required()
                    ->label('Nama Ayah'),

                Forms\Components\TextInput::make('nama_ibu')
                    ->required()
                    ->label('Nama Ibu'),

                Forms\Components\DatePicker::make('tgl_nikah_ortu')
                    ->required()
                    ->label('Tanggal Nikah Orang Tua'),

                Forms\Components\TextInput::make('nama_saksi1')
                    ->required()
                    ->label('Nama Saksi 1'),

                Forms\Components\TextInput::make('nama_saksi2')
                    ->required()
                    ->label('Nama Saksi 2'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('nama_baptis')
                    ->label('Nama Baptis')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('jenis_kelamin')
                    ->label('Jenis Kelamin')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('tg_lahir')
                    ->label('Tanggal Lahir')
                    ->sortable(),

                TextColumn::make('nama_ayah')
                    ->label('Nama Ayah')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('nama_ibu')
                    ->label('Nama Ibu')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('tgl_nikah_ortu')
                    ->label('Tanggal Nikah Orang Tua')
                    ->sortable(),

                TextColumn::make('nama_saksi1')
                    ->label('Nama Saksi 1')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('nama_saksi2')
                    ->label('Nama Saksi 2')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('created_at')
                    ->label('Dibuat Pada')
                    ->dateTime(),

                TextColumn::make('updated_at')
                    ->label('Diperbarui Pada')
                    ->dateTime(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Action::make('print')
                    ->label('Print PDF')
                    ->icon('heroicon-o-printer')
                    ->action(function () {
                        $baptisData = Baptis::all();

                        $pdf = Pdf::loadView('pdf.baptis', compact('baptisData'));
                        return response()->streamDownload(fn () => print($pdf->stream()), 'baptis.pdf');
                    })
                    ->color('secondary'),
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
            'index' => Pages\ListBaptis::route('/'),
            'create' => Pages\CreateBaptis::route('/create'),
            'edit' => Pages\EditBaptis::route('/{record}/edit'),
        ];
    }
}
