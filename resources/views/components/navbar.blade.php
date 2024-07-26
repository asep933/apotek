<x-particle.progress />

<nav
    class="bg-white z-50 dark:bg-gray-900 w-full start-0 border-b border-gray-200 dark:border-gray-600"
>
    <div
        class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto"
    >
        <a
            href="{{ route("dashboard") }}"
            class="flex items-center rtl:space-x-reverse"
        >
            <img src="/logo-apotek.jpeg" class="h-20" alt="Apotek Logo" />
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            @guest
                <a
                    id="sign-in"
                    href="{{ route("sign-in") }}"
                    class="text-white bg-third hover:bg-opacity-85 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                >
                    Sign in
                </a>
                <a
                    id="sign-up"
                    href="{{ route("sign-up") }}"
                    class="text-white bg-third hover:bg-opacity-85 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                >
                    Sign up
                </a>
            @endguest

            @auth
                <form
                    id="logout"
                    action="{{ route("logout") }}"
                    method="GET"
                    class="text-white bg-third hover:bg-opacity-85 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                >
                    <button type="submit">Logout</button>
                </form>
            @endauth

            <button
                data-collapse-toggle="navbar-sticky"
                type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-sticky"
                aria-expanded="false"
            >
                <span class="sr-only">Open main menu</span>
                <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 17 14"
                >
                    <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15"
                    />
                </svg>
            </button>
        </div>
        <div
            class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
            id="navbar-sticky"
        >
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700"
            >
                <li>
                    <a
                        href="{{ route("dashboard") }}"
                        class="block py-2 px-3 text-black rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                        aria-current="page"
                    >
                        <span
                            class="text-black hover:border-b-2 border-third dark:hover:text-third dark:text-fourth"
                        >
                            Home
                        </span>
                    </a>
                </li>
                <li>
                    <a
                        href="{{ route("about") }}"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                    >
                        <span
                            class="text-black hover:border-b-2 border-third dark:hover:text-third dark:text-fourth"
                        >
                            About
                        </span>
                    </a>
                </li>
                <li>
                    <button
                        id="dropdownHoverButton"
                        data-dropdown-toggle="dropdownHover"
                        data-dropdown-trigger="hover"
                        class="text-black px-3 lg:px-0 dark:hover:text-third dark:text-fourth font-medium text-center inline-flex items-center"
                        type="button"
                    >
                        Browse
                        <svg
                            id="arrow"
                            class="w-2.5 h-2.5 ms-3"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 10 6"
                        >
                            <path
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="m1 1 4 4 4-4"
                            />
                        </svg>
                    </button>
                    <div
                        id="dropdownHover"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-56 dark:bg-gray-700"
                    >
                        <ul
                            class="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownHoverButton"
                        >
                            <li>
                                <a
                                    href="/products"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                >
                                    All Products
                                </a>
                            </li>
                            <li>
                                <details class="group px-2">
                                    <summary
                                        class="flex items-center justify-between gap-2 p-2 font-medium marker:content-none hover:cursor-pointer"
                                    >
                                        <span class="flex gap-2">
                                            <span>Categories</span>
                                        </span>
                                        <svg
                                            class="w-5 h-5 text-gray-500 transition group-open:rotate-90"
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="16"
                                            height="16"
                                            fill="currentColor"
                                            viewBox="0 0 16 16"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"
                                            ></path>
                                        </svg>
                                    </summary>

                                    <article
                                        class="px-4 pb-4 bg-fourth dark:hover:text-third dark:text-fourth dark:bg-gray-900"
                                    >
                                        <ul
                                            class="flex flex-col gap-1 pl-2 pt-2"
                                        >
                                            <li
                                                class="block hover:bg-white w-full"
                                            >
                                                <a
                                                    href="{{ route("category", 1) }}"
                                                >
                                                    Antihistamin
                                                </a>
                                            </li>
                                            <li
                                                class="block hover:bg-white w-full"
                                            >
                                                <a
                                                    href="{{ route("category", 2) }}"
                                                >
                                                    Analgesik
                                                </a>
                                            </li>
                                            <li
                                                class="block hover:bg-white w-full"
                                            >
                                                <a
                                                    href="{{ route("category", 3) }}"
                                                >
                                                    Antipiretik
                                                </a>
                                            </li>
                                            <li
                                                class="block hover:bg-white w-full"
                                            >
                                                <a
                                                    href="{{ route("category", 4) }}"
                                                >
                                                    Antasida
                                                </a>
                                            </li>
                                        </ul>
                                    </article>
                                </details>
                            </li>
                            <li>
                                <a
                                    href="{{ route("article.list") }}"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                >
                                    Article
                                </a>
                            </li>
                            @auth
                                <li>
                                    <a
                                        href="{{ route("admin") }}"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                    >
                                        Admin
                                    </a>
                                </li>
                            @endauth

                            <li class="px-2">
                                <x-particle.search />
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a
                        href="{{ route("contact") }}"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                    >
                        <span
                            class="text-black hover:border-b-2 border-third dark:hover:text-third dark:text-fourth"
                        >
                            Contact
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="mt-4 px-4 lg:px-16 fixed z-[999] w-full">
    @if (session("message"))
        <x-particle.alert.success :message="session('message')" />
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <x-particle.alert.failed :message="$error" />
        @endforeach
    @endif
</div>

<script>
    const signIn = document.querySelector('#sign-in');
    const signUp = document.querySelector('#sign-up');
    const arrow = document.querySelector('#arrow');
    const path = window.location.pathname;

    switch (path) {
        case '/sign-in':
            signIn.style.display = 'none';
            break;
        case '/sign-up':
            signUp.style.display = 'none';
            break;
        default:
            signUp.style.display = 'none';
            break;
    }
</script>
