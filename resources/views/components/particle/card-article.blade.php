<div class="relative bg-gray-50 px-6 pt-16 pb-20 lg:px-8 lg:pt-8 lg:pb-28">
    <div class="absolute inset-0">
        <div class="h-1/3 bg-white sm:h-2/3"></div>
    </div>
    <div class="relative mx-auto max-w-7xl">
        <div class="text-center">
            <h2
                class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"
            >
                Artikel
            </h2>
            <p class="mx-auto mt-3 max-w-2xl text-xl text-gray-500 sm:mt-4">
                Baca berita kami
            </p>
        </div>
        <div
            class="mx-auto mt-12 grid max-w-lg gap-5 lg:max-w-none lg:grid-cols-3"
        >
            @foreach ($posts as $post)
                <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                    <div
                        class="flex flex-1 flex-col justify-between bg-white p-6"
                    >
                        <div class="flex-1">
                            <p class="text-sm font-medium text-secondary">
                                <span>Article</span>
                            </p>
                            <a
                                href="{!! route("article.detail", $post["id"]) !!}"
                            >
                                <div
                                    class="overflow-hidden max-h-64 rounded-md"
                                >
                                    <img
                                        src="{!! $post["image_url"] !!}"
                                        alt="{{ $post["title"] }}"
                                        class="my-2 w-full object-center rounded-md hover:scale-105 transition duration-300 ease-out object-cover"
                                    />
                                </div>
                            </a>
                            <a
                                href="{!! route("article.detail", $post["id"]) !!}"
                                cl[ass="mt-2 block"
                            >
                                <p
                                    class="text-xl font-semibold hover:underline text-gray-900"
                                >
                                    {!! $post["title"] !!}
                                </p>
                            </a>
                        </div>
                        <div class="mt-6 flex items-center">
                            <div class="flex-shrink-0">
                                <a href="#">
                                    <span class="sr-only">
                                        {!! $post["author"]->displayName !!}
                                    </span>
                                    <img
                                        class="h-10 w-10 rounded-full"
                                        src="{{ $post["author"]->image->url }}"
                                        alt="image article"
                                    />
                                </a>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">
                                    {!! $post["author"]->displayName !!}
                                </p>
                                <div
                                    class="flex space-x-1 text-sm text-gray-500"
                                >
                                    <time datetime="{{ $post["published"] }}">
                                        {{ \Carbon\Carbon::parse($post["published"])->format("d M Y, H:i") }}
                                    </time>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
