<?php

namespace App\Filament\Resources\ShowSkillResource\Pages;

use App\Filament\Resources\ShowSkillResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateShowSkill extends CreateRecord
{
    protected static string $resource = ShowSkillResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Skills Uplode')
            ->body('Skills Uplode has been created successfully.');
    }
}
