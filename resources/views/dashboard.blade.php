<x-layout>
    <div id="hero" class="pt-16 h-full">
        <x-hero-dashboard />
    </div>

    <x-statistic />
    <x-about />

    <div class="px-16 py-16 space-y-10">
        <div class="flex justify-between items-center">
            <h1 class="text-4xl font-extrabold">Sampel Product</h1>
            <a
                href="/products"
                class="text-white bg-third p-2 hover:underline lg:text-lg rounded-md w-max text-base"
            >
                View all
            </a>
        </div>
        <x-products-list :products="$products" />
    </div>

    <div class="px-4 lg:px-16 py-6">
        <x-accordion />
    </div>
</x-layout>