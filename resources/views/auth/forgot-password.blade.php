<x-layout>
    <div class="py-16 w-full flex justify-center items-center">
        <form action="{{ route("password.email") }}" method="POST">
            @csrf
            <div class="mb-5">
                <label
                    for="email"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                >
                    Email
                </label>
                <input
                    type="email"
                    name="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required
                    placeholder="email..."
                />
            </div>

            <button
                type="submit"
                class="text-white bg-third hover:bg-opacity-85 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            >
                Reset Password
            </button>
        </form>
    </div>
</x-layout>
