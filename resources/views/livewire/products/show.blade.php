@php
    use App\Models\Product;
    /** @var Product $product */
@endphp

<div>
    <div class="bg-gray-200 p-3 rounded flex flex-col gap-3">
        <div class="border-b border-b-gray-300 font-bold">
            {{ $product->name }} (ID: {{ $product->id }})
        </div>

        <div class="flex flex-col gap-3">
            <div class="flex flex-row justify-between">
                <div class="flex flex-col gap-3">
                    <div class="flex gap-2">
                        <span>Art.:</span>
                        <span class="font-bold">{{ $product->article }}</span>
                    </div>
                    <div class="flex gap-2">
                        <span>Name:</span>
                        <span class="font-bold">{{ $product->name }}</span>
                    </div>
                    <div class="flex gap-2">
                        <span>Color:</span>
                        <span class="font-bold">{{ $product->data['color'] ?? 'None' }}</span>
                    </div>
                    <div class="flex gap-2">
                        <span>Size:</span>
                        <span class="font-bold">{{ $product->data['size'] ?? 'None' }}</span>
                    </div>
                    <div class="flex gap-2">
                        <span>Created:</span>
                        <span class="font-bold">{{ $product->created_at->toFormattedDateString() }}</span>
                    </div>
                    <div class="flex gap-2">
                        <span>Updated:</span>
                        <span class="font-bold">{{ $product->created_at->toFormattedDateString() }}</span>
                    </div>
                </div>
                <div class="flex">
                    <img src="https://placehold.co/300x200" alt="Photo">
                </div>
            </div>
            <div class="flex justify-end gap-2">
                <a href="{{ route('products.edit', $product) }}" class="border border-gray-300 rounded py-2 px-3 hover:bg-gray-400 transition-all duration-300">
                    Edit
                </a>
                <form action="{{ route('products.destroy', $product) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="border border-red-300 rounded py-2 px-3 hover:bg-red-400 transition-all duration-300">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
