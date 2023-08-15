<?php

namespace App\Filament\Resources;

use App\Filament\Resources\Columns\CustomVideoColumn;
use App\Filament\Resources\VideoResource\Pages;
use App\Filament\Resources\VideoResource\RelationManagers;
use App\Models\Videos;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class VideoResource extends Resource
{
    protected static ?string $model = Videos::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('path')->label('Загрузить Видео')
                    ->disk('public')
                    ->maxSize(1000000)
                    ->directory('video')
                    ->acceptedFileTypes(['video/*'])
                    ->multiple()
                    ->preserveFilenames(false)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                CustomVideoColumn::make('path')
//                    ->label('Видео')
//                    ->disk('public/local')
//                    ->extraImgAttributes(['class' => 'object-cover'])
//                    ->size('20vh')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListVideo::route('/'),
            'create' => Pages\CreateVideo::route('/create'),
            'edit' => Pages\EditVideo::route('/{record}/edit'),
            'view' => Pages\ViewVideo::route('/{record}'),
        ];
    }
}
