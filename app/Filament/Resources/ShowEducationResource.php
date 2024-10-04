<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ShowEducationResource\Pages;
use App\Filament\Resources\ShowEducationResource\RelationManagers;
use App\Models\Education;
use App\Models\ShowEducation;
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

class ShowEducationResource extends Resource
{
    protected static ?string $model = Education::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('deg_title')->label('Degree Title')->required(),
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
                TextColumn::make('deg_title'),
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
            'index' => Pages\ListShowEducation::route('/'),
            'create' => Pages\CreateShowEducation::route('/create'),
            'edit' => Pages\EditShowEducation::route('/{record}/edit'),
        ];
    }
}
