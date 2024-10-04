<?php

namespace App\Filament\Resources\ShowExperienceResource\Pages;

use App\Filament\Resources\ShowExperienceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListShowExperiences extends ListRecords
{
    protected static string $resource = ShowExperienceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
