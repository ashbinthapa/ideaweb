<?php

namespace App\Filament\Resources\NaatResource\Pages;

use App\Filament\Resources\NaatResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNaats extends ListRecords
{
    protected static string $resource = NaatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
