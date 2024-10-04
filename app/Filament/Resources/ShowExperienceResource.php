<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ShowExperienceResource\Pages;
use App\Filament\Resources\ShowExperienceResource\RelationManagers;
use App\Models\Experience;
use App\Models\ShowExperience;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ShowExperienceResource extends Resource
{
    protected static ?string $model = Experience::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required(),
                TextInput::make('year')->required(),
                TextInput::make('institute')->required(),
                Select::make('status')->options([
                    1 => 'Active',
                    0 => 'Block'
                ]),
                RichEditor::make('short_desc')->label('Short Description')->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListShowExperiences::route('/'),
            'create' => Pages\CreateShowExperience::route('/create'),
            'edit' => Pages\EditShowExperience::route('/{record}/edit'),
        ];
    }
}
