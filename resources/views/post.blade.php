<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <article class="py-8 max-w-screen-md">
        <h2 class="text-3xl mb-1 tracking-tight">{{ $post['title'] }}</h2>
        <div class="text-gray-400 text-md">
            <a href="#" class="!text-orange-400">{{ $post['author'] }}</a> |
            <time datetime="2022-01-01">Jan 1, 2022</time>
        </div>
        <p class="my-4 font-light text-justify">{{ $post['body'] }}</p>
        <a href="/blog" class="text-orange-400 font-medium hover:text-orange-300">&laquo; Back to Blog</a>
    </article>
</x-layout>
