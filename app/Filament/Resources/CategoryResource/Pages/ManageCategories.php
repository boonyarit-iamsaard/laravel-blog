<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Resources\CategoryResource;
use Exception;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;
use Str;

class ManageCategories extends ManageRecords
{
    protected static string $resource = CategoryResource::class;

    protected static ?string $navigationGroup = 'Content';

    /**
     * @throws Exception
     */
    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->mutateFormDataUsing(function ($data) {
                    $data['slug'] = Str::slug($data['name']);

                    return $data;
                }),
        ];
    }
}
