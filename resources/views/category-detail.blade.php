<x-layout>
    <div class="pt-32 pb-16 capitalize space-y-5">
        <h1 class="font-bold text-2xl px-16 max-w-screen-xl mx-auto">
            Category {{ $categories->title }}:
        </h1>

        <div class="flex justify-center">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($categories->product as $product)
                    <x-particle.card
                        :title="$product->title"
                        :category="$product->category"
                        :description="$product->description"
                        :image="$product->image_url"
                    />
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
