<?php

namespace App\Filament\Resources\ShowExperienceResource\Pages;

use App\Filament\Resources\ShowExperienceResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditShowExperience extends EditRecord
{
    protected static string $resource = ShowExperienceResource::class;

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
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Information update')
            ->body('Information update successfully.');
    }
}
