<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Services\ProductsService;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    public function __construct(protected ProductsService $productsService) {}

    public function store(StoreProductRequest $request): RedirectResponse
    {
        $this->productsService->store($request->validated());
        return redirect()->route('products.index');
    }

    public function update(UpdateProductRequest $request, Product $product): RedirectResponse
    {
        $this->productsService->update($product, $request->validated());
        return redirect()->route('products.show', $product);
    }

    public function destroy(Product $product): RedirectResponse
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
