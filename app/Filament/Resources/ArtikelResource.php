<?php
namespace App\Filament\Resources;

use App\Filament\Resources\ArtikelResource\Pages;
use App\Models\Artikel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;

class ArtikelResource extends Resource
{
    protected static ?string $model = Artikel::class;

    protected static ?string $navigationGroup = 'Ptofile';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul_artikel')
                    ->required()
                    ->label('Judul Artikel'),


                Forms\Components\DatePicker::make('tgl_artikel')
                    ->required()
                    ->label('Tanggal Artikel'),

                Forms\Components\FileUpload::make('gambar')
                    ->image()
                    ->required()
                    ->label('Gambar Artikel'),

                Forms\Components\RichEditor::make('isi_artikel')
                    ->required()
                    ->label('Isi Artikel'),
                ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('judul_artikel')
                    ->label('Judul Artikel')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('tgl_artikel')
                    ->label('Tanggal Artikel')
                    ->sortable(),

                // ImageColumn::make('gambar')
                //     ->label('Gambar Artikel')
                //     ->size(100),

                TextColumn::make('created_at')
                    ->label('Dibuat Pada')
                    ->dateTime(),

                TextColumn::make('updated_at')
                    ->label('Diperbarui Pada')
                    ->dateTime(),
            ])
            ->filters([
                // Filters can be added here if needed
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListArtikels::route('/'),
            'create' => Pages\CreateArtikel::route('/create'),
            'edit' => Pages\EditArtikel::route('/{record}/edit'),
        ];
    }
}
