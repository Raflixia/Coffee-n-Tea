<?php

namespace App\Filament\Resources\DetailKeranjangResource\Pages;

use App\Filament\Resources\DetailKeranjangResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDetailKeranjangs extends ListRecords
{
    protected static string $resource = DetailKeranjangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
