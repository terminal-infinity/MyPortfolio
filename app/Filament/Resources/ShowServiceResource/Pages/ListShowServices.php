<?php

namespace App\Filament\Resources\ShowServiceResource\Pages;

use App\Filament\Resources\ShowServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListShowServices extends ListRecords
{
    protected static string $resource = ShowServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
