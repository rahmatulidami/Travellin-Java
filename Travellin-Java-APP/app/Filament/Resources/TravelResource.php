<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TravelResource\Pages;
use App\Filament\Resources\TravelResource\RelationManagers;
use App\Models\Travel;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TravelResource extends Resource
{
    protected static ?string $model = Travel::class;

    protected static ?string $navigationIcon = 'heroicon-o-map-pin';

    protected static ?string $navigationGroup = 'Wisata';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('category_id')
                    ->label('Kategori')
                    ->relationship('category', 'name')
                    ->required(),
                TextInput::make('name')->required(),
                Textarea::make('description')->label(__('Deskripsi'))->autosize()->required(),
                FileUpload::make('image1')
                    ->image()
                    ->directory('travel.images1')
                    ->previewable(fn (string $operation): bool => $operation !== 'edit')
                    ->required(fn (string $operation): bool => $operation === 'create'),
                FileUpload::make('image2')
                    ->image()
                    ->directory('travel.images2')
                    ->previewable(fn (string $operation): bool => $operation !== 'edit')
                    ->required(fn (string $operation): bool => $operation === 'create'),
                FileUpload::make('image3')
                    ->image()
                    ->directory('travel.images3')
                    ->previewable(fn (string $operation): bool => $operation !== 'edit')
                    ->required(fn (string $operation): bool => $operation === 'create'),
                FileUpload::make('image4')
                    ->image()
                    ->directory('travel.images4')
                    ->previewable(fn (string $operation): bool => $operation !== 'edit')
                    ->required(fn (string $operation): bool => $operation === 'create'),
                FileUpload::make('image5')
                    ->image()
                    ->directory('travel.images5')
                    ->previewable(fn (string $operation): bool => $operation !== 'edit')
                    ->required(fn (string $operation): bool => $operation === 'create'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('category.name'),
                TextColumn::make('name'),
                TextColumn::make('description')->limit(20),
                ImageColumn::make('image1'),
                ImageColumn::make('image2'),
                ImageColumn::make('image3'),
                ImageColumn::make('image4'),
                ImageColumn::make('image5'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListTravel::route('/'),
            'create' => Pages\CreateTravel::route('/create'),
            'edit' => Pages\EditTravel::route('/{record}/edit'),
        ];
    }
}
