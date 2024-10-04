<?php

namespace App\Filament\Resources\ShowServiceResource\Pages;

use App\Filament\Resources\ShowServiceResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateShowService extends CreateRecord
{
    protected static string $resource = ShowServiceResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Service Uplode')
            ->body('Service Uplode has been created successfully.');
    }
}
