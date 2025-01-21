@php
    use App\Models\Product;
@endphp

<div>
    <div class="grid grid-cols-4 gap-3">
        @foreach($products as /** @var Product $product */ $product)
            <div class="bg-gray-200 p-3 rounded flex flex-col gap-3">
                <div class="border-b border-b-gray-300 font-bold">
                    {{ $product->name }}
                </div>

                <div class="flex flex-col gap-3">
                    <div class="flex gap-2">
                        <span>Art.:</span>
                        <span class="font-bold">{{ $product->article }}</span>
                    </div>
                    <div class="flex justify-end">
                        <a href="{{ route('products.show', ['product' => $product]) }}" class="border border-gray-300 rounded py-2 px-3 hover:bg-gray-400 transition-all duration-300">
                            Show
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
