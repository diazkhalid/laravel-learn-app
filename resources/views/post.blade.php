<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <article class="py-8 max-w-screen-md">
        <h2 class="text-3xl mb-1 tracking-tight">{{ $post['title'] }}</h2>
        <div class="text-gray-400 text-md">
            <a href="/author/{{ $post->author->id }}"
                class="!text-orange-400 hover:underline">{{ $post->author->name }}</a> |
            {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light text-justify">{{ $post['body'] }}</p>
        <a href="/blog" class="text-orange-400 font-medium hover:text-orange-300">&laquo; Back to Blog</a>
    </article>
</x-layout>
