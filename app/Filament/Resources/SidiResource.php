<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SidiResource\Pages;
use App\Models\Sidi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\DateColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Barryvdh\DomPDF\Facade\Pdf;

class SidiResource extends Resource
{
    protected static ?string $model = Sidi::class;

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

                TextInput::make('nama_sidi')
                    ->required()
                    ->label('Nama Sidi'),

                TextInput::make('jenis_kelamin')
                    ->required()
                    ->label('Jenis Kelamin'),

                DatePicker::make('tg_lahir')
                    ->required()
                    ->label('Tanggal Lahir'),

                TextInput::make('nama_ayah')
                    ->required()
                    ->label('Nama Ayah'),

                TextInput::make('nama_ibu')
                    ->required()
                    ->label('Nama Ibu'),

                TextInput::make('nama_saksi1')
                    ->required()
                    ->label('Nama Saksi 1'),

                TextInput::make('nama_saksi2')
                    ->required()
                    ->label('Nama Saksi 2'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('nama_sidi')
                    ->label('Nama Sidi'),

                TextColumn::make('jenis_kelamin')
                    ->label('Jenis Kelamin'),

                TextColumn::make('tg_lahir')
                    ->label('Tanggal Lahir')
                    ->sortable(),

                TextColumn::make('nama_ayah')
                    ->label('Nama Ayah'),

                TextColumn::make('nama_ibu')
                    ->label('Nama Ibu'),

                TextColumn::make('nama_saksi1')
                    ->label('Nama Saksi 1'),

                TextColumn::make('nama_saksi2')
                    ->label('Nama Saksi 2'),

                TextColumn::make('created_at')
                    ->label('Dibuat Pada')
                    ->dateTime(),

                TextColumn::make('updated_at')
                    ->label('Diperbarui Pada')
                    ->dateTime(),
            ])
            ->filters([
                // Define filters if needed
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('print')
                    ->label('Cetak PDF')
                    ->icon('heroicon-o-printer')
                    ->action(function (Sidi $record) {
                        $pdf = Pdf::loadView('pdf.sidi', ['record' => $record]);
                        return response()->streamDownload(fn() => print($pdf->output()), 'sidi_'.$record->id.'.pdf');
                    }),
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
            'index' => Pages\ListSidis::route('/'),
            'create' => Pages\CreateSidi::route('/create'),
            'edit' => Pages\EditSidi::route('/{record}/edit'),
        ];
    }
}
