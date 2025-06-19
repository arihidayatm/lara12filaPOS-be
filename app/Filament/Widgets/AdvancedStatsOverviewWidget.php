<?php

namespace App\Filament\Widgets;

use EightyNine\FilamentAdvancedWidget\AdvancedStatsOverviewWidget as BaseWidget;
use EightyNine\FilamentAdvancedWidget\AdvancedStatsOverviewWidget\Stat;

class AdvancedStatsOverviewWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            //Product Stat
            Stat::make('Products', 'produk')
                ->count(\App\Models\Product::count())
                ->description('Total menu/produk tersedia')
                ->descriptionIcon('heroicon-o-shopping-bag', 'after')
                ->descriptionColor('primary')
                ->icon('heroicon-o-cube')
                ->iconColor('primary'),
            //Order Stat
            // Stat::make('Orders')
            //     ->count(\App\Models\Order::count())
            //     ->icon('heroicon-o-shopping-cart')
            //     ->color('success'),
            // Category Stat
            Stat::make('Categories', 'kategori')
                ->count(\App\Models\Category::count())
                ->description('Total kategori tersedia')
                ->descriptionIcon('heroicon-o-tag', 'after')
                ->descriptionColor('primary')
                ->icon('heroicon-o-collection')
                ->iconColor('primary'),
            //User Stat
            Stat::make('Total Users', "users")->icon('heroicon-o-user')
                ->backgroundColor('info')
                ->progress(69)
                ->progressBarColor('success')
                ->iconBackgroundColor('success')
                ->chartColor('success')
                ->iconPosition('start')
                ->description('The users in this period')
                ->descriptionIcon('heroicon-o-chevron-up', 'before')
                ->descriptionColor('success')
                ->iconColor('success'),
            //Revenue Stat
            // Stat::make('Revenue')
            //     ->count(\App\Models\Order::sum('total'))
            //     ->icon('heroicon-o-currency-dollar')
            //     ->color('info'),
        ];
    }
}
