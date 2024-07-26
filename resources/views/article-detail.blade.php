<x-layout>
    {{ Breadcrumbs::render("article.detail", $posts) }}
    <x-article-detail
        :postId="$posts->id"
        :title="$posts->title"
        :date="$posts->published"
        :content="$posts->content"
        :lists="$lists"
        :comments="$comments"
    />
</x-layout>
