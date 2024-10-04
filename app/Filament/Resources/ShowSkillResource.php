<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ShowSkillResource\Pages;
use App\Filament\Resources\ShowSkillResource\RelationManagers;
use App\Models\ShowSkill;
use App\Models\Skills;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ShowSkillResource extends Resource
{
    protected static ?string $model = Skills::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                FileUpload::make('image')->columnSpan(2),
                Select::make('status')->options([
                    1 => 'Active',
                    0 => 'Block'
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                ImageColumn::make('image'),
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
            'index' => Pages\ListShowSkills::route('/'),
            'create' => Pages\CreateShowSkill::route('/create'),
            'edit' => Pages\EditShowSkill::route('/{record}/edit'),
        ];
    }
}
