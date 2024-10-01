<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengurusResource\Pages;
use App\Models\Pengurus;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;

class PengurusResource extends Resource
{
    protected static ?string $model = Pengurus::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Data Pengurus/Pelayanan Gereja';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    protected static ?string $navigationLabel = 'Pelayan Gereja';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->required()
                    ->label('Nama'),

                TextInput::make('jabatan')
                    ->required()
                    ->label('Jabatan'),

                Select::make('status')
                    ->required()
                    ->options([
                        'Aktif' => 'Aktif',
                        'Nonaktif' => 'Nonaktif',
                    ])
                    ->label('Status'),

                FileUpload::make('gambar')
                    ->label('Foto')
                    ->image()
                    ->disk('public') // Ensure 'public' matches your disk configuration
                    ->directory('images') // Directory inside the disk where images are stored
                    ->required(),
                
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

                TextColumn::make('jabatan')
                    ->label('Jabatan')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('status')
                    ->label('Status')
                    ->sortable()
                    ->searchable(),

                // ImageColumn::make('gambar')
                //     ->label('Gambar')
                //     ->disk('public') // Ensure 'public' matches your disk configuration
                //     ->defaultImageUrl(url('/images/default.webp')) // Fallback image URL
                //     ->sortable(),
            ])
            ->filters([
                // Add filters if needed
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
            // Define relations if needed
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPenguruses::route('/'),
            'create' => Pages\CreatePengurus::route('/create'),
            'edit' => Pages\EditPengurus::route('/{record}/edit'),
        ];
    }
}
