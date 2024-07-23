<div class="w-full bg-gray-200 rounded-full h-[4px] dark:bg-gray-700">
    <div
        class="bg-third h-2.5 rounded-full dark:bg-third"
        style="width: 0"
        id="progress"
    ></div>
</div>

<script>
    const progress = document.querySelector('#progress');

    function progressBar() {
        const scrollTop =
            window.pageYOffset || document.documentElement.scrollTop;
        const scrollHeight =
            document.documentElement.scrollHeight -
            document.documentElement.clientHeight;
        const scrollPercentage = (scrollTop / scrollHeight) * 100;

        progress.style.width = scrollPercentage + '%';
    }

    window.addEventListener('scroll', progressBar);
    progressBar();
</script>
