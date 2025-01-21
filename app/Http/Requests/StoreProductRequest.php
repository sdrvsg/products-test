<?php

namespace App\Http\Requests;

use App\Models\Product;
use Illuminate\Foundation\Http\FormRequest;

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
            'article' => ['required', 'alpha_num:ascii', 'unique:' . Product::class . ',article'],
        ];
    }
}
