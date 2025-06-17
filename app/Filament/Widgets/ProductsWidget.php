<?php

namespace App\Filament\Widgets;

use App\Models\Product;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class ProductsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Produk', Product::count())
                ->description('Total menu/produk tersedia')
                ->descriptionIcon('heroicon-o-shopping-bag')
                ->color('warning'),
        ];
    }
}
