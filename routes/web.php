<?php

use App\Http\Controllers\ProductController;
use App\Livewire\Products\Create;
use App\Livewire\Products\Edit;
use App\Livewire\Products\Index;
use App\Livewire\Products\Show;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/products');
Route::prefix('/products')->name('products.')->group(function () {

    Route::get('/', Index::class)->name('index');
    Route::get('/create', Create::class)->name('create');
    Route::get('/{product}', Show::class)->name('show');
    Route::get('/{product}/edit', Edit::class)->name('edit');

    Route::post('/', [ProductController::class, 'store'])->name('store');
    Route::put('/{product}', [ProductController::class, 'update'])->name('update');
    Route::delete('/{product}', [ProductController::class, 'destroy'])->name('destroy');

});
