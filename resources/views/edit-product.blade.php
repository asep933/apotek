<x-layout>
    <div class="dark:bg-gray-900 dark:text-white">
        <x-particle.form-product
            :action="route('edit.product.proccess', $product)"
            method="PUT"
            :title="$product->title"
            :description="$product->description"
        />
    </div>
</x-layout>
