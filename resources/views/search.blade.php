<x-layout>
    <div class="px-4 py-24 lg:px-16 lg:py-32 space-y-5">
        <h1 class="text-3xl font-bold">Hasil pencarian:</h1>

        @if ($products->isEmpty())
            <h2>Products not found...</h2>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($products as $product)
                <x-particle.card
                    title="{{$product->title}}"
                    description="{{$product->description}}"
                    image="{{$product->image_url}}"
                    :category="$product->category"
                />
            @endforeach
        </div>

        <div>{{ $products->links() }}</div>
    </div>
</x-layout>
