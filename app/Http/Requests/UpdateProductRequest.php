<?php

namespace App\Http\Requests;

use App\Enums\ProductStatus;
use App\Models\Product;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(Request $request): array
    {
        $product = $request->route('product');
        return [
            'name' => ['required', 'min:10'],
            'article' => ['required', 'alpha_num:ascii', Rule::unique(Product::class)->ignore($product)],
            'status' => ['required', Rule::enum(ProductStatus::class)],
            'data' => ['nullable', 'array'],
        ];
    }
}
