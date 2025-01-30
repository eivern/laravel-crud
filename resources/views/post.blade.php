<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- <article class="max-w-screen-md py-8">
        <h3 class="mb-1 text-3xl font-bold tracking-tight text-gray-900">{{ $post->title }}</h3>
        <div class="text-base text-gray-500">
            By <a href="/authors/{{ $post->author->username }}" class="hover:underline">{{ $post->author->name }}</a> in
            <a href="/categories/{{ $post->category->slug }}"
                class="text-gray-800 hover:underline">{{ $post->category->name }}</a> |
            {{ $post->created_at->diffForHumans() }}
        </div>
        <p class="my-4 font-light">{{ $post->body }}
        </p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to posts </a>
    </article> --}}

    <!--
Install the "flowbite-typography" NPM package to apply styles and format the article content:

URL: https://flowbite.com/docs/components/typography/
-->

    <main class="bg-white pb-16 pt-8 antialiased dark:bg-gray-900 lg:pb-24 lg:pt-16">
        <div class="max-w-screen-4xl mx-auto flex justify-between px-4">
            <article
                class="format format-sm format-blue mx-auto w-full max-w-4xl dark:format-invert sm:format-base lg:format-lg">
                <header class="not-format mb-4 lg:mb-6">
                    <a href="/posts">&laquo; Back to posts</a>
                    <address class="mb-6 flex items-center not-italic">
                        <div class="mr-3 inline-flex items-center text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 h-16 w-16 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                            <div>
                                <a href="/authors/{{ $post->author->username }}" rel="author"
                                    class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->name }}</a>

                                <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate
                                        datetime="2022-02-08"
                                        title="February 8th, 2022">{{ $post->created_at->diffForHumans() }}</time></p>
                                <p class="text-base text-gray-500 dark:text-gray-400">{{ $post->category->name }}</p>
                            </div>
                        </div>
                    </address>
                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 dark:text-white lg:mb-6 lg:text-4xl">
                        {{ $post->title }}</h1>
                </header>

                <p>{{ $post->body }}</p>
            </article>
        </div>
    </main>
</x-layout>
