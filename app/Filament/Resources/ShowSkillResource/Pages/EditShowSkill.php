<?php

namespace App\Filament\Resources\ShowSkillResource\Pages;

use App\Filament\Resources\ShowSkillResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditShowSkill extends EditRecord
{
    protected static string $resource = ShowSkillResource::class;

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
            ->title('Skills Updated')
            ->body('Skills Updated successfully.');
    }
}
