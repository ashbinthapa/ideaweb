<?php

namespace App\Filament\Resources\InvestigatorResource\Pages;

use App\Filament\Resources\InvestigatorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInvestigator extends EditRecord
{
    protected static string $resource = InvestigatorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
