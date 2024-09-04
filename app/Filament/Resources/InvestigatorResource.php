<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InvestigatorResource\Pages;
use App\Filament\Resources\InvestigatorResource\RelationManagers;
use App\Models\Investigator;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class InvestigatorResource extends Resource
{
    protected static ?string $model = Investigator::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Name'),
                Forms\Components\TextInput::make('position')
                    ->label('Position'),
                Forms\Components\TextInput::make('phone')
                    ->label('Phone Number'),
                Forms\Components\TextInput::make('email')
                    ->label('Email'),
                Forms\Components\TextInput::make('details')
                    ->label('Educational Details'),
                Forms\Components\TextInput::make('image')
                    ->label('Profile Image Link'),
                Forms\Components\TextInput::make('cvupload')
                    ->label('CV Link'),
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
                Tables\Columns\TextColumn::make('name')
                    ->label('Name')
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
            'index' => Pages\ListInvestigators::route('/'),
            'create' => Pages\CreateInvestigator::route('/create'),
            'edit' => Pages\EditInvestigator::route('/{record}/edit'),
        ];
    }
}
