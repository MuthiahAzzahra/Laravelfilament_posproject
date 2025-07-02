<?php

namespace App\Filament\Clusters\Products\Resources\ExpenseResource\Pages;

use App\Filament\Clusters\Products\Resources\ExpenseResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateExpense extends CreateRecord
{
    protected static string $resource = ExpenseResource::class;
}
