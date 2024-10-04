<?php

namespace App\Filament\Resources\ShowEducationResource\Pages;

use App\Filament\Resources\ShowEducationResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditShowEducation extends EditRecord
{
    protected static string $resource = ShowEducationResource::class;

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
