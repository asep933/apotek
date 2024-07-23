<div class="flex justify-center">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($products as $product)
            <x-particle.card
                :title="$product->title"
                :category="$product->category"
                :description="$product->description"
                :image="$product->image_url"
            />
        @endforeach
    </div>
</div>
