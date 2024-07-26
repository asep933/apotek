<x-layout>
    {{ Breadcrumbs::render("admin") }}

    <div
        class="lg:px-16 md:px-12 sm:px-8 px-4 dark:bg-gray-900 dark:text-white pt-20 pb-16"
    >
        <x-admin />
        <x-table :products="$products" />
        <div class="max-w-screen-xl mx-auto mt-4">
            {{ $products->links() }}
        </div>
    </div>
</x-layout>
