<x-layout>

    <div class="bg-gray-900 py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <article class="max-w-4xl mx-auto py-12 text-white">
                <h1 class="text-4xl font-bold">
                    {{ $detail->title }}
                </h1>

                <p class="mt-2 text-gray-500">
                    By {{ $detail->author->name }}
                </p>
            <div class="mx-auto border-t mt-10">
                <div class="mt-8 text-white">
                    {{ $detail->content }}
                </div>
            </div>

            <div class="mt-20 flex justify-between">

                <a href="/post" class="bg-blue-500 text-white py-2 px-4 shadow-md rounded-lg"> &laquo; Back</a>
            </div>
            </article>

        </div>
    </div>

</x-layout>