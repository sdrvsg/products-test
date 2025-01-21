<?php

namespace App\Jobs;

use App\Services\ProductsService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Http;

class SendLatestProductWebhook implements ShouldQueue
{
    use Queueable;

    public function __construct(public ProductsService $productsService) {}

    public function handle(): void
    {
        $product = $this->productsService->getLatest();
        Http::post(config('products.webhook'), $product->toArray());
    }
}
