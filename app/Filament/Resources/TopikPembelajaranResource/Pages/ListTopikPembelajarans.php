<?php

namespace App\Filament\Resources\TopikPembelajaranResource\Pages;

use App\Filament\Resources\TopikPembelajaranResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTopikPembelajarans extends ListRecords
{
    protected static string $resource = TopikPembelajaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
