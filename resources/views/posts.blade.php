<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-search></x-search>
    <div class="mx-auto max-w-screen-xl px-4 py-8 lg:px-6 lg:py-16">
        <div class="my-4">
            {{ $posts->links() }}
        </div>
        <div class="grid gap-8 lg:grid-cols-2">
            @forelse ($posts as $post)
                <article
                    class="rounded-lg border border-gray-200 bg-white p-6 shadow-md dark:border-gray-700 dark:bg-gray-800">
                    <div class="mb-5 flex items-center justify-between text-gray-500">
                        <a href="/posts?category={{ $post->category->slug }}">
                            <span
                                class="inline-flex items-center rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-200 dark:text-primary-800">
                                {{ $post->category->name }}
                            </span>
                        </a>
                        <span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a
                            href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ $post->body }}</p>
                    <div class="flex items-center justify-between">
                        <a href="/posts?author={{ $post->author->username }}" class="flex items-center space-x-4">
                            <img class="h-7 w-7 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                alt="Jese Leos avatar" />
                            <span class="font-medium dark:text-white">
                                {{ $post->author->name }}
                            </span>
                        </a>
                        <a href="/posts/{{ $post->slug }}"
                            class="inline-flex items-center font-medium text-primary-600 hover:underline dark:text-primary-500">
                            Read more
                            <svg class="ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </article>
            @empty
                <p>Article not found</p>
            @endforelse

        </div>
    </div>

</x-layout>
