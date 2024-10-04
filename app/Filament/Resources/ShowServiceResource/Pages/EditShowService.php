<?php

namespace App\Filament\Resources\ShowServiceResource\Pages;

use App\Filament\Resources\ShowServiceResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditShowService extends EditRecord
{
    protected static string $resource = ShowServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Service Updated')
            ->body('Service Updated successfully.');
    }
}
