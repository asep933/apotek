<x-layout>
    <x-particle.form-product
        :action="route('edit.product.proccess', $product)"
        method="PUT"
        :title="$product->title"
        :description="$product->description"
    />
</x-layout>
