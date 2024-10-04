<?php

namespace App\Filament\Resources\ShowEducationResource\Pages;

use App\Filament\Resources\ShowEducationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListShowEducation extends ListRecords
{
    protected static string $resource = ShowEducationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
