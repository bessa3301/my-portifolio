<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TechStackResource\Pages;
use App\Filament\Resources\TechStackResource\RelationManagers;
use App\Models\TechStack;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;

class TechStackResource extends Resource
{
    protected static ?string $model = TechStack::class;

    protected static ?string $navigationIcon = 'heroicon-o-variable';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                FileUpload::make('file_path')->label('Icon')->image()->required(),
                Select::make('expertise')->options([
                    'Beginner - 1/5',
                    'Intermediate - 2/5',
                    'Advanced - 3/5',
                    'Experienced - 4/5',
                    'Expert - 5/5',
                ])->required(),
                RichEditor::make('description')->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
            ])
            ->filters([
                //
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
            'index' => Pages\ListTechStacks::route('/'),
            'create' => Pages\CreateTechStack::route('/create'),
            'edit' => Pages\EditTechStack::route('/{record}/edit'),
        ];
    }
}
