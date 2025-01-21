<?php

namespace App\Http\Requests;

use App\Enums\ProductStatus;
use App\Models\Product;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'min:10'],
            'article' => ['required', 'alpha_num:ascii', Rule::unique(Product::class)],
            'status' => ['required', Rule::enum(ProductStatus::class)],
            'data' => ['nullable', 'array'],
        ];
    }
}
