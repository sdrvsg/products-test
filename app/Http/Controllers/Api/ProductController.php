<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ProductsService;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    public function __construct(protected ProductsService $productsService) {}

    public function index(): JsonResponse
    {
        return response()->json($this->productsService->getAvailable());
    }
}
