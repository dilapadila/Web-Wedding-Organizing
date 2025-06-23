<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaketResource\Pages;
use App\Filament\Resources\PaketResource\RelationManagers;
use App\Models\Paket;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PaketResource extends Resource
{
    protected static ?string $model = Paket::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_vendor')
                ->relationship('vendor', 'nama_vendor'),
                Forms\Components\TextInput::make('nama_paket')
                    ->required()
                    ->maxLength(225),
                Forms\Components\FileUpload::make('gambar')
                    ->image()
                    ->imageEditor(),
                Forms\Components\Textarea::make('deskripsi')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('lampiran')
                    ->multiple()
                    ->acceptedFileTypes(['application/pdf'])
                    ->openable()
                    ->storeFileNamesIn('lampiran_nama')

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_vendor')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama_paket')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('gambar'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPakets::route('/'),
            'create' => Pages\CreatePaket::route('/create'),
            'edit' => Pages\EditPaket::route('/{record}/edit'),
        ];
    }
}
