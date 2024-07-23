<div
    class="relative overflow-x-auto shadow-md sm:rounded-lg max-w-screen-xl mx-auto"
>
    <table
        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
    >
        <thead
            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
        >
            <tr>
                <th scope="col" class="px-6 py-3">Title</th>
                <th scope="col" class="px-6 py-3">Description</th>
                <th scope="col" class="px-6 py-3">Category</th>
                <th scope="col" class="px-6 py-3">Image</th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
                >
                    <th
                        scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                    >
                        {{ $product->title }}
                    </th>
                    <td class="px-6 py-4">{{ $product->description }}</td>
                    <td class="px-6 py-4">{{ $product->category->title }}</td>
                    <td class="px-6 py-4">
                        <img
                            src="{{ asset($product->image_url) }}"
                            alt="{{ $product->title }}"
                            width="300px"
                        />
                    </td>
                    <td class="px-6 py-4 space-y-4 text-right">
                        <a
                            href="{{ route("edit.product", $product) }}"
                            class="font-medium text-third hover:underline"
                        >
                            Edit
                        </a>
                        <x-particle.alert.danger :product="$product" />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
