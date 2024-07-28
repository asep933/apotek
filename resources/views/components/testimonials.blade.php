<div class="testimonial-slider overflow-hidden">
    <div class="swiper-wrapper">
        @foreach ($testimonials as $testimonial)
            <div
                style="
                    box-shadow:
                        0px 2px 4px rgba(0, 0, 0, 0.06),
                        0px 4px 6px rgba(0, 0, 0, 0.1);
                "
                class="swiper-slide flex flex-col max-w-md align-center justify-between border border-solid border-gray-200 bg-white dark:bg-gray-800 rounded-xl"
            >
                <div class="flex flex-col px-6 pt-8 mb-10 space-y-5">
                    <svg
                        width="24"
                        height="18"
                        viewBox="0 0 24 18"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        class="text-gray-A400 dark:text-gray-600 fill-current"
                    >
                        <path
                            d="M24 7.3h-5.1L22.3.4H17l-3.4 6.9v10.3H24V7.3zM10.3 17.6V7.3H5L8.6.4H3.4L0 7.3v10.3h10.3z"
                            fill="current"
                        ></path>
                    </svg>
                    <p
                        class="body-medium m-0 dark:text-gray-200"
                        style="hyphens: auto"
                    >
                        {{ $testimonial->content }}
                    </p>
                </div>
                <div
                    class="flex space-x-2 bg-gray-50 dark:bg-gray-900/60 dark:text-gray-200 px-6 pt-6 pb-5 rounded-b-xl"
                >
                    <div class="flex flex-col justify-center">
                        <p class="heading-six m-0">
                            {{ $testimonial->user->name }}
                        </p>
                        <p class="body-small m-0 mt-1">
                            {{ $testimonial->user->email }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="px-1 py-8">
        <button
            id="testimonial-slider-prev"
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
            id="testimonial-slider-next"
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
        const swiper = new Swiper('.testimonial-slider', {
            direction: 'horizontal',
            loop: true,
            slidesPerView: 4,

            pagination: {
                el: '.swiper-pagination',
            },

            grabCursor: true,
            autoplay: true,

            navigation: {
                nextEl: '#testimonial-slider-next',
                prevEl: '#testimonial-slider-prev',
            },

            scrollbar: {
                el: '.swiper-scrollbar',
            },

            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 6,
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 8,
                },
                960: {
                    slidesPerView: 3,
                    spaceBetween: 12,
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 15,
                },
            },
        });
    });
</script>
