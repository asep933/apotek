@props([
    "title",
    "description",
    "image",
    "category",
])

<div
    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
>
    <img
        class="rounded-t-lg h-44"
        src="{{ asset($image) }}"
        alt="{{ $title }}"
    />

    <div class="p-5">
        <h5
            class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
        >
            {{ $title }}
        </h5>

        <form action="{{ route("category", $category) }}" method="get">
            <button type="submit" class="hover:underline">
                <span
                    class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300"
                >
                    {{ $category->title }}
                </span>
            </button>
        </form>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
            {{ Str::limit($description, 150) }}
        </p>
        <a
            href="https://wa.me/085872256552"
            target="_blank"
            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-third rounded-lg hover:bg-opacity-85 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
            Get
            <svg
                class="rtl:rotate-180 w-3.5 h-3.5 ms-2"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 14 10"
            >
                <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M1 5h12m0 0L9 1m4 4L9 9"
                />
            </svg>
        </a>
    </div>
</div>
