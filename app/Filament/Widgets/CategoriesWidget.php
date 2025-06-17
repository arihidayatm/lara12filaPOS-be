<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class CategoriesWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Kategori', Category::count())
                ->description('Total kategori menu')
                ->descriptionIcon('heroicon-o-rectangle-stack')
                ->color('primary'),
        ];
    }
}
