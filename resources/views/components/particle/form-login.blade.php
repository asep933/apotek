<form
    action="{{ route("sign-in.proccess") }}"
    class="max-w-sm mx-auto capitalize"
    method="POST"
>
    @method("POST")
    @csrf

    <div class="mb-5">
        <label
            for="email"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
        >
            email
        </label>
        <input
            type="email"
            id="email"
            name="email"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="email..."
            required
        />
    </div>
    <div class="mb-5">
        <label
            for="password"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
        >
            password
        </label>
        <input
            type="password"
            id="password"
            name="password"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            required
            placeholder="password..."
        />
    </div>
    <button
        type="submit"
        class="text-white bg-third hover:bg-opacity-85 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
    >
        Submit
    </button>
</form>
