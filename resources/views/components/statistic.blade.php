<div id="statistic" class="dark:bg-gray-900 lg:pt-12">
    <div class="pt-12 bg-fourth dark:bg-gray-900 sm:pt-20">
        <div class="max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h2
                    class="text-3xl font-extrabold leading-9 text-gray-900 dark:text-white sm:text-4xl sm:leading-10"
                >
                    Informasi Apotek
                </h2>
                <p
                    class="mt-3 text-xl leading-7 text-gray-600 dark:text-gray-400 sm:mt-4"
                >
                    Berikut adalah informasi terbaru dari apotek kami:
                </p>
            </div>
        </div>
        <div class="pb-12 mt-10 bg-white dark:bg-gray-900 sm:pb-16">
            <div class="relative">
                <div
                    class="absolute inset-0 h-1/2 bg-fourth dark:bg-gray-900"
                ></div>
                <div
                    class="relative max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8"
                >
                    <div class="max-w-4xl mx-auto">
                        <dl
                            class="bg-white dark:bg-gray-800 rounded-lg shadow-lg sm:grid sm:grid-cols-3"
                        >
                            <div
                                class="flex flex-col p-6 text-center border-b border-gray-100 dark:border-gray-700 sm:border-0 sm:border-r"
                            >
                                <dt
                                    class="order-2 mt-2 text-lg font-medium leading-6 text-gray-500 dark:text-gray-400"
                                    id="item-1"
                                >
                                    Cabang
                                </dt>
                                <dd
                                    class="order-1 text-5xl font-extrabold leading-none text-third dark:text-indigo-100"
                                    aria-describedby="item-1"
                                    id="starsCount"
                                >
                                    0
                                </dd>
                            </div>
                            <div
                                class="flex flex-col p-6 text-center border-t border-b border-gray-100 dark:border-gray-700 sm:border-0 sm:border-l sm:border-r"
                            >
                                <dt
                                    class="order-2 mt-2 text-lg font-medium leading-6 text-gray-500 dark:text-gray-400"
                                >
                                    Testimoni
                                </dt>
                                <dd
                                    class="order-1 text-5xl font-extrabold leading-none text-third dark:text-indigo-100"
                                    id="downloadsCount"
                                >
                                    0
                                </dd>
                            </div>
                            <div
                                class="flex flex-col p-6 text-center border-t border-gray-100 dark:border-gray-700 sm:border-0 sm:border-l"
                            >
                                <dt
                                    class="order-2 mt-2 text-lg font-medium leading-6 text-gray-500 dark:text-gray-400"
                                >
                                    Sponsor
                                </dt>
                                <dd
                                    class="order-1 text-5xl font-extrabold leading-none text-third dark:text-indigo-100"
                                    id="sponsorsCount"
                                >
                                    0
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const targets = [
        {
            element: document.getElementById('starsCount'),
            count: 4670,
            suffix: '+',
        },
        {
            element: document.getElementById('downloadsCount'),
            count: 80000,
            suffix: '+',
        },
        {
            element: document.getElementById('sponsorsCount'),
            count: 100,
            suffix: '+',
        },
    ];

    const maxCount = Math.max(...targets.map((target) => target.count));

    function animateCountUp(target, duration) {
        let currentCount = 0;
        const increment = Math.ceil(target.count / (duration / 10));

        const interval = setInterval(() => {
            currentCount += increment;
            if (currentCount >= target.count) {
                clearInterval(interval);
                currentCount = target.count;
                target.element.textContent = currentCount + target.suffix;
            } else {
                target.element.textContent = currentCount;
            }
        }, 10);
    }

    targets.forEach((target) => {
        animateCountUp(target, maxCount / 100);
    });
</script>
