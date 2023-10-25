<x-app-layout>
    <div class="space-y-5 prose prose-lg max-w-none text-justify">
        <h1 class="not-prose">{{ $post->title }}</h1>
        <x-post-meta :post="$post" />
        <div>{{ $post->contents }}</div>
    </div>
</x-app-layout>