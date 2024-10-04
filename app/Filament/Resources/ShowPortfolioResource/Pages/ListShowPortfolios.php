<?php

namespace App\Filament\Resources\ShowPortfolioResource\Pages;

use App\Filament\Resources\ShowPortfolioResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListShowPortfolios extends ListRecords
{
    protected static string $resource = ShowPortfolioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
