<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Transaksi;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\TransaksiResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TransaksiResource\RelationManagers;

class TransaksiResource extends Resource
{
    protected static ?string $model = Transaksi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('user_id')
                ->relationship('user', 'name')
                ->searchable()
                ->preload()
                    ->required(),
                Forms\Components\TextInput::make('total_harga')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('metode_pembayaran')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('status_pembayaran')
                    ->required(),
                    DatePicker::make('tanggal_transaksi')
                    ->required(),
                Forms\Components\Textarea::make('alamat_pengiriman')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('ongkir')
                    ->required()
                    ->numeric()
                    ->default(0.00),
                Forms\Components\TextInput::make('status_pengiriman')
                    ->required()
                    ->maxLength(50)
                    ->default('belum dikirim'),
                Forms\Components\TextInput::make('nama_penerima')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('no_hp_penerima')
                    ->required()
                    ->maxLength(20),
                Forms\Components\TextInput::make('kurir')
                    ->required()
                    ->maxLength(50),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('total_harga')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('metode_pembayaran')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status_pembayaran'),
                Tables\Columns\TextColumn::make('tanggal_transaksi')
                ->dateTime("d-M-Y")
                    ->sortable(),
                Tables\Columns\TextColumn::make('ongkir')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status_pengiriman')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_penerima')
                    ->searchable(),
                Tables\Columns\TextColumn::make('no_hp_penerima')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kurir')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime("d-M-Y")
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
            'index' => Pages\ListTransaksis::route('/'),
            'create' => Pages\CreateTransaksi::route('/create'),
            'edit' => Pages\EditTransaksi::route('/{record}/edit'),
        ];
    }
}
