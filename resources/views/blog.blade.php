<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    @foreach ($posts as $post)
        <article class="border-b-2 border-gray-300 py-8 max-w-screen-md">
            <h2 class="text-3xl mb-1 tracking-tight font-semibold">{{ $post['title'] }}</h2>
            <div class="text-gray-400 text-md">
                <a href="/author/{{ $post->author->id }}"
                    class="!text-orange-400 hover:underline">{{ $post->author->name }}</a> |
                {{ $post->created_at->diffForHumans() }}
            </div>
            <p class="my-4 font-light text-justify">{{ Str::limit($post['body'], 150) }}</p>
            <a href="/blog/{{ $post['slug'] }}" class="text-orange-400 font-medium hover:text-orange-300">Read More
                &raquo;</a>
        </article>
    @endforeach
</x-layout>
