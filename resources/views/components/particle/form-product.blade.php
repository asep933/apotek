@props([
    "method",
    "action",
    "title" => false,
    "description" => false,
])

<form
    action="{{ $action }}"
    class="max-w-sm mx-auto capitalize pt-32 pb-16"
    enctype="multipart/form-data"
    method="POST"
>
    @method($method)
    @csrf

    <div class="mb-5">
        <label
            for="title"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
        >
            title
        </label>
        <input
            type="text"
            name="title"
            value="{{ old($title, $title) }}"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="title..."
            required
        />
    </div>
    <div class="mb-5">
        <label
            for="description"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
        >
            description
        </label>
        <textarea
            name="description"
            rows="4"
            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Write your thoughts here..."
        >
{{ old($description, $description) }}
</textarea
        >
    </div>

    <label
        for="category_id"
        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
    >
        Category
    </label>
    <select
        name="category_id"
        required
        class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
    >
        <option value="1">Antihistamin</option>
        <option value="2">Analgesik</option>
        <option value="3">Antipiretik</option>
        <option value="4">Antasida</option>
    </select>

    <label
        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
        for="image"
    >
        Image
    </label>
    <input
        class="block w-full mb-5 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
        id="image"
        name="image"
        required
        type="file"
    />

    <button
        type="submit"
        class="text-white bg-third hover:bg-opacity-85 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
    >
        Submit
    </button>
</form>
