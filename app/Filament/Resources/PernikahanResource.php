<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PernikahanResource\Pages;
use App\Models\Pernikahan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\DateColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Barryvdh\DomPDF\Facade\Pdf;

class PernikahanResource extends Resource
{
    protected static ?string $model = Pernikahan::class;

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
                TextInput::make('id_jemaat')
                    ->required()
                    ->label('ID Jemaat'),

                FileUpload::make('pas_pria')
                    ->required()
                    ->label('Pas Foto Pria')
                    ->image() // Ensures the uploaded file is an image
                    ->disk('public') // Specify the disk where files will be stored
                    ->directory('pernikahan/pas_pria'), // Specify directory to store files

                DatePicker::make('ttl_pria')
                    ->required()
                    ->label('Tanggal Lahir Pria'),

                FileUpload::make('pas_wanita')
                    ->required()
                    ->label('Pas Foto Wanita')
                    ->image() // Ensures the uploaded file is an image
                    ->disk('public') // Specify the disk where files will be stored
                    ->directory('pernikahan/pas_wanita'), // Specify directory to store files

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

                TextColumn::make('id_jemaat')
                    ->label('ID Jemaat')
                    ->sortable(),

                TextColumn::make('pas_pria')
                    ->label('Pas Foto Pria')
                    ->formatStateUsing(fn ($state) => $state ? 'Uploaded' : 'Not Uploaded'),

                TextColumn::make('ttl_pria')
                    ->label('Tanggal Lahir Pria')
                    ->sortable(),

                TextColumn::make('pas_wanita')
                    ->label('Pas Foto Wanita')
                    ->formatStateUsing(fn ($state) => $state ? 'Uploaded' : 'Not Uploaded'),

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
                    ->action(function (Pernikahan $record) {
                        $pdf = Pdf::loadView('pdf.pernikahan', ['record' => $record]);
                        return response()->streamDownload(fn() => print($pdf->output()), 'pernikahan_'.$record->id.'.pdf');
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
            'index' => Pages\ListPernikahans::route('/'),
            'create' => Pages\CreatePernikahan::route('/create'),
            'edit' => Pages\EditPernikahan::route('/{record}/edit'),
        ];
    }
}
