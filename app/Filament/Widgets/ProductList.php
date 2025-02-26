<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use App\Models\Product;
use App\Models\Products;

class ProductList extends BaseWidget
{
    protected int|string|array $columnSpan = 'full';
    protected static ?int $sort = 1;

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Products::query()
            )
            ->columns([
                TextColumn::make("productCode")
                    ->label("Kode Produk"),
                TextColumn::make("productName")
                    ->label("Produk"),
                TextColumn::make("productLine")
                    ->label("Kategori"),
                TextColumn::make("productDescription")
                    ->label("Deskripsi"),
            ]);
    }
}
