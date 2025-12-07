<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article class="py-8 max-w-screen-md">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div class="">
            By
            {{-- <a class="hover:underline" href="/authors/{{ $post->author->id }}">{{ $post->author->name }}</a> | {{ $post->created_at ? $post->created_at->format('j F Y') : 'Tanggal Tidak Tersedia' }} --}} <!--Eloquent Relationship-->
            <a class="hover:underline text-base text-gray-500" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>
            in <a href="/categories/{{ $post->category->slug }}" class="hover:underline text-base text-gray-500">{{ $post->category->name }}</a> {{ $post->created_at ? $post->created_at->format('j F Y') : 'Tanggal Tidak Tersedia' }} <!--Post Category-->
        </div>
        <p class="my-4 font-light">
            {{ $post['body'] }}
        </p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to posts</a>
    </article>
</x-layout>
