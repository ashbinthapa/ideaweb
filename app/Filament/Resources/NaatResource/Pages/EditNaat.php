<?php

namespace App\Filament\Resources\NaatResource\Pages;

use App\Filament\Resources\NaatResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNaat extends EditRecord
{
    protected static string $resource = NaatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
