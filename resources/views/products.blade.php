<x-layout>
    <div class="py-24 capitalize space-y-6">
        <h1 class="text-3xl font-bold px-16 max-w-screen-xl mx-auto">
            list all products
        </h1>
        <x-products-list :products="$products" />
    </div>

    <div class="text-center flex flex-col py-8 px-16 max-w-screen-xl mx-auto">
        {{ $products->links() }}
    </div>
</x-layout>
