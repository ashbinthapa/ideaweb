<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CapacityBuildingResource\Pages;
use App\Filament\Resources\CapacityBuildingResource\RelationManagers;
use App\Models\CapacityBuilding;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;


class CapacityBuildingResource extends Resource
{
    protected static ?string $model = CapacityBuilding::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Title'),
                Forms\Components\TextInput::make('slug')
                    ->label('Slug'),
                Forms\Components\TextInput::make('published_at')
                    ->label('published_at'),
                TinyEditor::make('content')
                    ->fileAttachmentsDisk('local')
                    ->fileAttachmentsVisibility('public')
                    ->fileAttachmentsDirectory('uploads')
                    ->columnSpan('full'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
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
            'index' => Pages\ListCapacityBuildings::route('/'),
            'create' => Pages\CreateCapacityBuilding::route('/create'),
            'edit' => Pages\EditCapacityBuilding::route('/{record}/edit'),
        ];
    }
}
