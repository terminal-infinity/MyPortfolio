<?php

namespace App\Filament\Resources\ShowSkillResource\Pages;

use App\Filament\Resources\ShowSkillResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListShowSkills extends ListRecords
{
    protected static string $resource = ShowSkillResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
