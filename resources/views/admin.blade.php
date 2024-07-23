<x-layout>
    <div class="lg:px-16 md:px-12 sm:px-8 px-4 space-y-8 mt-32 mb-16">
        <x-admin />
        <x-table :products="$products" />
        <div>{{ $products->links() }}</div>
    </div>
</x-layout>
