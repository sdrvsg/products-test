<div>
    <form action="{{ route('products.store') }}" method="POST" class="flex flex-col gap-3 max-w-80 mx-auto">
        @if ($errors->any())
            <div class="border-s-2 border-s-red-600 ps-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @csrf

        <input type="text" name="article" placeholder="Article" />

        <input type="text" name="name" placeholder="Name" />

        <select name="status">
            @foreach(\App\Enums\ProductStatus::cases() as $status)
                <option value="{{ $status->value }}">{{ ucfirst($status->value) }}</option>
            @endforeach
        </select>

        <input type="text" name="data[color]" placeholder="Color" />

        <select name="data[size]">
            @foreach(['XS', 'S', 'M', 'L', 'XL'] as $size)
                <option value="{{ $size }}">{{ $size }}</option>
            @endforeach
        </select>

        <button type="submit" class="border border-gray-300 rounded py-2 px-3 hover:bg-gray-400 transition-all duration-300">
            Create
        </button>
    </form>
</div>
