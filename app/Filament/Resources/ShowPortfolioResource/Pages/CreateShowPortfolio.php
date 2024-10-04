<?php

namespace App\Filament\Resources\ShowPortfolioResource\Pages;

use App\Filament\Resources\ShowPortfolioResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateShowPortfolio extends CreateRecord
{
    protected static string $resource = ShowPortfolioResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('Project Uplode')
            ->body('project Uplode has been created successfully.');
    }
}
