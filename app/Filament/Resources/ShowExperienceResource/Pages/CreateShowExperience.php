<?php

namespace App\Filament\Resources\ShowExperienceResource\Pages;

use App\Filament\Resources\ShowExperienceResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateShowExperience extends CreateRecord
{
    protected static string $resource = ShowExperienceResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Information Uplode')
            ->body('Information Uplode has been created successfully.');
    }
}
