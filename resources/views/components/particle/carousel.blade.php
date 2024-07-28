<div class="swiper max-w-screen-2xl relative">
    <div class="swiper-wrapper" id="carousel">
        {{ $slot }}
    </div>

    <div class="absolute top-1/2 px-4 z-40 w-full flex justify-between">
        <button
            id="hero-slider-prev"
            type="button"
            class="text-white rotate-180 bg-third hover:bg-secondary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
            <svg
                class="w-4 h-4"
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
            <span class="sr-only">Icon description</span>
        </button>
        <button
            id="hero-slider-next"
            type="button"
            class="text-white bg-third hover:bg-secondary focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        >
            <svg
                class="w-4 h-4"
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
            <span class="sr-only">Icon description</span>
        </button>
    </div>
</div>

<script type="module">
    import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs';
    document.addEventListener('DOMContentLoaded', function () {
        const swiper = new Swiper('.swiper', {
            direction: 'horizontal',
            loop: true,

            pagination: {
                el: '.swiper-pagination',
            },

            grabCursor: true,
            autoplay: true,

            navigation: {
                nextEl: '#hero-slider-next',
                prevEl: '#hero-slider-prev',
            },

            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
    });
</script>
