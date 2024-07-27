@props([
    "postId",
    "comments" => false,
])

<div class="w-auto bg-white rounded-lg border">
    <h3 class="font-bold">Komentar</h3>

    <form>
        <div class="flex flex-col">
            @if (empty($comments->items))
                <p>0 comments</p>
            @endif

            @if (isset($comments->items))
                @foreach ($comments->items as $comment)
                    @if (isset($comment))
                        <div class="border rounded-md p-3 ml-3 my-3">
                            <div class="flex gap-3 items-center">
                                <img
                                    src="{{ $comment->author->image->url }}"
                                    class="object-cover w-8 h-8 rounded-full border-2 border-emerald-400 shadow-emerald-400"
                                />

                                <h3 class="font-bold">
                                    {{ $comment->content }}
                                </h3>
                            </div>

                            <p class="text-gray-600 mt-2">
                                {{ $comment->author->displayName }}
                            </p>

                            @auth
                                <form
                                    method="POST"
                                    action="{{ route("delete.comment", [$comment->id, $postId]) }}"
                                >
                                    @csrf
                                    @method("delete")
                                    <button
                                        type="submit"
                                        class="text-xs text-secondary hover:text-third hover:underline"
                                    >
                                        delete
                                    </button>
                                </form>
                            @endauth
                        </div>
                    @endif
                @endforeach
            @endif
        </div>

        <div class="w-full px-3 my-2">
            <textarea
                class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                name="body"
                placeholder="Type Your Comment"
                required
            ></textarea>
        </div>

        <div class="w-full flex justify-end px-3">
            <input
                type="submit"
                class="px-2.5 py-1.5 rounded-md cursor-pointer text-white text-sm bg-third"
                value="Post Comment"
            />
        </div>
    </form>
</div>
