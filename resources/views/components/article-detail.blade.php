<div class="flex flex-col">
    <div class="bg-gray-100 py-8">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold text-gray-800 mb-2">{{ $title }}</h1>
            <p class="text-gray-600">
                Published on
                {{ \Carbon\Carbon::parse($date)->format("d M Y, H:i") }}
            </p>
        </div>
    </div>
    <div class="bg-white py-8">
        <div class="container mx-auto px-4 flex flex-col md:flex-row">
            <div class="w-full md:w-3/4 px-4">
                <div class="prose max-w-none">
                    {!! $content !!}
                </div>
            </div>
            <div class="w-full md:w-1/4 px-4">
                <div class="bg-gray-100 p-4">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">
                        Postingan terbaru
                    </h2>
                    <ul class="list-none">
                        @foreach ($lists as $list)
                            <li class="mb-2">
                                <div class="sm:col-span-6 lg:col-span-4">
                                    <div class="flex items-start mb-3 pb-3">
                                        <a
                                            href="{{ route("article.detail", $list["id"]) }}"
                                            class="inline-block mr-3"
                                        >
                                            <img
                                                class="w-40 h-16 bg-cover bg-center"
                                                src="{{ $list["image_url"] }}"
                                                alt="{{ $list["title"] }}"
                                            />
                                        </a>
                                        <div class="text-sm">
                                            <p class="text-gray-600 text-xs">
                                                {{ \Carbon\Carbon::parse($list["published"])->format("d M Y, H:i") }}
                                            </p>
                                            <a
                                                href="{{ route("article.detail", $list["id"]) }}"
                                                class="text-gray-900 font-medium hover:text-third leading-none"
                                            >
                                                {{ $list["title"] }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="px-8 pb-16">
        <x-comments :comments="$comments" :postId="$postId" />
    </div>
</div>
