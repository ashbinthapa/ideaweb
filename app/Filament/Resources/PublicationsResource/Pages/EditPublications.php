<?php

namespace App\Filament\Resources\PublicationsResource\Pages;

use App\Filament\Resources\PublicationsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPublications extends EditRecord
{
    protected static string $resource = PublicationsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
