<x-layout>
    <form
        action="{{ route("password.update") }}"
        class="max-w-sm mx-auto capitalize my-8"
        method="POST"
    >
        @csrf

        <input type="hidden" name="token" value="{{ $token }}" />

        <div class="mb-5">
            <label
                for="email"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >
                email
            </label>
            <input
                value="{{ $request->email ?? old("email") }}"
                type="text"
                name="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required
                placeholder="email..."
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
                autocomplete="new password"
                type="password"
                name="password"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required
                placeholder="password..."
            />
        </div>
        <div class="mb-5">
            <label
                for="password"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
            >
                password confirm
            </label>
            <input
                type="password"
                name="password_confirmation"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required
                placeholder="password confirmation..."
            />
        </div>
        <div class="mb-5">
            <a
                href="/forgot-password"
                class="text-third text-xs hover:underline hover:text-secondary"
            >
                forgot password
            </a>
        </div>
        <button
            type="submit"
            class="text-white bg-third hover:bg-opacity-85 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
            Submit
        </button>
    </form>
</x-layout>
