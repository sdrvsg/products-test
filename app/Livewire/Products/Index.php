<?php

namespace App\Livewire\Products;

use App\Services\ProductsService;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Products')]
class Index extends Component
{
    public function render(ProductsService $productsService)
    {
        return view('livewire.products.index')->with([
            'products' => $productsService->getAvailable()
        ]);
    }
}
