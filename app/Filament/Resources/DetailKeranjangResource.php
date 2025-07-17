<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\DetailKeranjang;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\Placeholder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DetailKeranjangResource\Pages;
use App\Filament\Resources\DetailKeranjangResource\RelationManagers;

class DetailKeranjangResource extends Resource
{
    protected static ?string $model = DetailKeranjang::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('keranjang_id')
                    ->relationship('keranjang', 'user_id')
                    ->searchable()
                    ->preload()
                    ->required(),
                    Select::make('produk_id')
                    ->label('Produk')
                    ->relationship('produk', 'nama')
                    ->searchable()
                    ->preload()
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function (callable $set, $state) {
                        $produk = \App\Models\Produk::find($state);
                        $set('harga', $produk?->harga ?? 0);
                    }),

                TextInput::make('jumlah')
                    ->label('Jumlah')
                    ->numeric()
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function (callable $set, callable $get) {
                        $harga = (int) $get('harga');
                        $jumlah = (int) $get('jumlah');
                        $set('subtotal', $harga * $jumlah);
                    }),

                // Harga satuan, readonly
                TextInput::make('harga')
                    ->label('Harga Satuan')
                    ->numeric()
                    ->disabled(), // tidak bisa diubah oleh user

                // Subtotal akan dihitung otomatis
                TextInput::make('subtotal')
                    ->label('Subtotal')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('keranjang.user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('produk.nama')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('subtotal')
                    ->numeric()
                    ->sortable(),

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
            'index' => Pages\ListDetailKeranjangs::route('/'),
            'create' => Pages\CreateDetailKeranjang::route('/create'),
            'edit' => Pages\EditDetailKeranjang::route('/{record}/edit'),
        ];
    }
}
