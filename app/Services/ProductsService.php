<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class ProductsService
{
    public function getAvailable(): Collection
    {
        return Product::query()->available()->get();
    }

    public function store(array $attributes): void
    {
        Product::query()->create($attributes);
    }

    public function update(Product $product, array $attributes): void
    {
        $product->update($attributes);
    }
}
