<?php

namespace Database\Factories;

use App\Enums\ProductStatus;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    public function definition(): array
    {
        $updated_at = fake()->dateTime();
        $created_at = fake()->dateTime(max: $updated_at);

        return [
            'article' => fake()->unique()->bothify('????####'),
            'name' => fake()->unique()->userName(),
            'status' => fake()->randomElement(ProductStatus::class),
            'data' => [
                'color' => fake()->colorName(),
                'size' => fake()->randomElement(['XS', 'S', 'M', 'L', 'XL']),
            ],
            'created_at' => $created_at,
            'updated_at' => $updated_at,
        ];
    }
}
