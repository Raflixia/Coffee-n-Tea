<?php

namespace App\Filament\Resources\DetailTransaksiResource\Pages;

use App\Filament\Resources\DetailTransaksiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDetailTransaksi extends EditRecord
{
    protected static string $resource = DetailTransaksiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
