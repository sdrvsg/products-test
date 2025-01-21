<?php

namespace App\Jobs;

use App\Mail\ProductCreated;
use App\Models\Product;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;

class SendProductNotification implements ShouldQueue
{
    use Queueable;

    public function __construct(public Product $product) {}

    public function handle(): void
    {
        Mail::to(config('products.email'))->send(new ProductCreated($this->product));
    }
}
