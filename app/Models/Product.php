<?php

namespace App\Models;

use App\Enums\ProductStatus;
use Carbon\Carbon;
use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property string $article
 * @property string $name
 * @property ProductStatus $status
 * @property array $data
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $deleted_at
 */
class Product extends Model
{
    /** @use HasFactory<ProductFactory> */
    use HasFactory, SoftDeletes;

    public function casts(): array
    {
        return [
            'status' => ProductStatus::class,
            'data' => AsArrayObject::class,
        ];
    }

    public function scopeAvailable(Builder $query): void
    {
        $query->where('status', ProductStatus::Available);
    }
}
