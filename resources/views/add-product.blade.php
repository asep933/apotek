<x-layout>
    {{ Breadcrumbs::render("add.product") }}

    <div class="dark:bg-gray-900 dark:text-white">
        <x-particle.form-product method="POST" :action="route('store')" />
    </div>
</x-layout>
