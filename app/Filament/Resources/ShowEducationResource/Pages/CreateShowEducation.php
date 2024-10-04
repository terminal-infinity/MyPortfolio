<?php

namespace App\Filament\Resources\ShowEducationResource\Pages;

use App\Filament\Resources\ShowEducationResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateShowEducation extends CreateRecord
{
    protected static string $resource = ShowEducationResource::class;
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
