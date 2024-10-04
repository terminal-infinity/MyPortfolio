<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ShowPortfolioResource\Pages;
use App\Filament\Resources\ShowPortfolioResource\RelationManagers;
use App\Models\Category;
use App\Models\ProtfolioPage;
use App\Models\ShowPortfolio;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
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

class ShowPortfolioResource extends Resource
{
    protected static ?string $model = ProtfolioPage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required()->placeholder('Title'),
                TextInput::make('client')->placeholder('client name'),
                Select::make('category_id')->label('Category') ->options(Category::all()->pluck('name','id')),
                TextInput::make('project_url')->url(),
                RichEditor::make('description')->columnSpan(2),
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
                TextColumn::make('title')->searchable(),
                TextColumn::make('client')->searchable(),
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
            'index' => Pages\ListShowPortfolios::route('/'),
            'create' => Pages\CreateShowPortfolio::route('/create'),
            'edit' => Pages\EditShowPortfolio::route('/{record}/edit'),
        ];
    }
}
