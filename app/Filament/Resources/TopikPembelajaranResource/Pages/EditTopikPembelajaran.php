<?php

namespace App\Filament\Resources\TopikPembelajaranResource\Pages;

use App\Filament\Resources\TopikPembelajaranResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTopikPembelajaran extends EditRecord
{
    protected static string $resource = TopikPembelajaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
