<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

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

    public function canChangeArticle(Request $request, Product $product): bool
    {
        $isAdmin = config('products.role') === config('products.admin_role');
        $isArticleDirty = $product->article !== $request->input('article');
        return !$isArticleDirty || $isAdmin;
    }
}
