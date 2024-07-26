<x-layout>
    {{ Breadcrumbs::render("product.detail", $product) }}

    <div class="max-w-screen-xl mx-auto px-8 py-6">
        <div
            class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700"
        >
            <img
                class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                src="{{ $product->image_url }}"
                alt="{{ $product->title }}"
            />
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5
                    class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                >
                    {{ $product->title }}
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    {{ $product->description }}
                </p>
                <a
                    target="_blank"
                    href="{{ env("LINK_WHATSAPP") }}"
                    type="button"
                    class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                >
                    Get
                </a>
            </div>
        </div>
    </div>
</x-layout>
