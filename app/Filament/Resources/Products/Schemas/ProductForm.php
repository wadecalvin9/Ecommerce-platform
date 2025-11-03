<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Storage;


class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('name')
                ->required(),

            Textarea::make('description')
                ->columnSpanFull(),

            TextInput::make('price')
                ->required()
                ->numeric()
                ->prefix('Ksh'),

            /*FileUpload::make('image_url')
                ->label('Product Image')
                ->image()
                ->saveUploadedFileUsing(function ($file, $record, $set) {
                    $path = Storage::disk('cloudinary')->putFile('products', $file);
                    $url = Storage::disk('cloudinary')->url($path);
                    $set('image_url', $url);
                    return $url;
                }), */
            TextInput::make('image_url'),

        ]);
    }
}
