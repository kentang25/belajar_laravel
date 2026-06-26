<x-layout>
    <div class="bg-gray-900 py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
            
                <h2 class="text-4xl font-semibold tracking-tight text-pretty text-white sm:text-5xl">Category Blog</h2>
            
                <p class="mt-2 text-lg/8 text-gray-300">Learn how to grow your business with our expert advice.</p>
            </div>
            <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-700 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">

                @foreach ($category as $post)
                <article class="flex h-full flex-col">

                    <div class="flex items-center gap-x-4 text-xs">
                        <time class="text-gray-400">
                            {{ $post->created_at->format('d M Y') }}
                        </time>

                        <a href="#"
                            class="rounded-full bg-gray-800/60 px-3 py-1.5 font-medium text-gray-300 hover:bg-gray-800">
                            {{ $post->category->name ?? 'General' }}
                        </a>
                    </div>

                    <div class="group relative mt-3 flex-1">
                        <h3 class="text-lg font-semibold text-white group-hover:text-gray-300">
                            <a href="{{ route('detail', $post->slug) }}">
                                {{ $post->title }}
                            </a>
                        </h3>

                        <p class="mt-5 line-clamp-3 text-sm text-gray-400">
                            {{ $post->content }}
                        </p>
                    </div>

                    <div class="mt-8 flex items-center gap-x-4">
                        <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="" class="size-10 rounded-full bg-gray-800">

                        <div class="text-sm">
                            <p class="font-semibold text-white">
                                {{ $post->author->name }}
                            </p>

                            <p class="text-gray-400">
                                Author
                            </p>
                        </div>
                    </div>

                </article>
                @endforeach
            </div>
            <div class="mt-20 flex justify-end">
                <a href="/post" class="bg-blue-500 text-white py-2 px-4 shadow-md rounded-lg"> &laquo; Back</a>
            </div>
        </div>
    </div>
</x-layout>