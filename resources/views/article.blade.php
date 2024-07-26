<x-layout>
    <div>{{ Breadcrumbs::render("article") }}</div>
    <x-particle.card-article :posts="$lists" />
</x-layout>
