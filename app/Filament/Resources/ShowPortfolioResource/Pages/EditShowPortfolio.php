<?php

namespace App\Filament\Resources\ShowPortfolioResource\Pages;

use App\Filament\Resources\ShowPortfolioResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditShowPortfolio extends EditRecord
{
    protected static string $resource = ShowPortfolioResource::class;

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
            ->title('Portfolio Updated')
            ->body('portfolio Updated successfully.');
    }
}
