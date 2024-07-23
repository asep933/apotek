<!DOCTYPE html>
<html lang="en" class="scroll-smooth dark:bg-gray-900">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Apotek</title>
        @vite(["resources/css/app.css", "resources/js/app.js"])
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
        />
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        </style>
    </head>
    <body>
        <div class="z-50" id="navbar">
            <x-navbar />
        </div>
        {{ $slot }}
        <x-footer />

        <script>
            const navbar = document.querySelector('#navbar');

            const handleScroll = (e) => {
                if (document.documentElement.scrollTop >= 380) {
                    navbar.classList.add('sticky');
                } else {
                    navbar.classList.remove('sticky');
                }
            };

            window.addEventListener('scroll', handleScroll);
            handleScroll();
        </script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script type="module">
            import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs';
            document.addEventListener('DOMContentLoaded', function () {
                const swiper = new Swiper('.swiper', {
                    direction: 'horizontal',
                    loop: true,

                    pagination: {
                        el: '.swiper-pagination',
                    },

                    autoplay: true,

                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },

                    scrollbar: {
                        el: '.swiper-scrollbar',
                    },
                });
            });
        </script>
    </body>
</html>
