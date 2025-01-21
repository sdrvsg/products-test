<?php

namespace App\Observers;

use App\Jobs\SendProductNotification;
use App\Models\Product;

class ProductObserver
{
    public function created(Product $product): void
    {
        SendProductNotification::dispatch($product);
    }
}
