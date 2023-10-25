<x-app-layout>
    @if ($posts->count())
        <h1 class="text-3xl font-semibold">Tagged {{ $tag }}</h1>

        <x-post-items :posts="$posts" />
    @endif
</x-app-layout>