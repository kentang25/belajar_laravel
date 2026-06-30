<x-layout>

<div class="max-w-3xl mx-auto py-10">

    <div class="bg-white rounded-xl shadow-lg p-8">

        <h1 class="text-3xl font-bold mb-8">
            Edit Post
        </h1>

        <form action="/admin/update/{{ $post->id }}" method="POST">

            @csrf
            @method('PUT')

            {{-- Title --}}
            <div class="mb-5">
                <label class="block font-semibold mb-2">
                    Title
                </label>

                <input
                    type="text"
                    name="title"
                    value="{{ old('title', $post->title) }}"
                    class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500">

                @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Slug --}}
            <div class="mb-5">
                <label class="block font-semibold mb-2">
                    Slug
                </label>

                <input
                    type="text"
                    name="slug"
                    value="{{ old('slug', $post->slug) }}"
                    class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500">

                @error('slug')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Content --}}
            <div class="mb-5">
                <label class="block font-semibold mb-2">
                    Content
                </label>

                <textarea
                    name="content"
                    rows="8"
                    class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500">{{ old('content', $post->content) }}</textarea>

                @error('content')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Author --}}
            <div class="mb-5">
                <label class="block font-semibold mb-2">
                    Author
                </label>

                <select
                    name="author_id"
                    class="w-full border rounded-lg px-4 py-2">

                    @foreach($authors as $author)
                        <option
                            value="{{ $author->id }}"
                            @selected(old('author_id', $post->author_id) == $author->id)>

                            {{ $author->name }}

                        </option>
                    @endforeach

                </select>
            </div>

            {{-- Category --}}
            <div class="mb-8">
                <label class="block font-semibold mb-2">
                    Category
                </label>

                <select
                    name="category_id"
                    class="w-full border rounded-lg px-4 py-2">

                    @foreach($categories as $category)
                        <option
                            value="{{ $category->id }}"
                            @selected(old('category_id', $post->category_id) == $category->id)>

                            {{ $category->name }}

                        </option>
                    @endforeach

                </select>
            </div>

            <div class="flex justify-end gap-3">

                <a href="/admin"
                    class="px-5 py-2 rounded-lg bg-gray-500 text-white hover:bg-gray-600">
                    Cancel
                </a>

                <button
                    type="submit"
                    class="px-5 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">
                    Update Post
                </button>

            </div>

        </form>

    </div>

</div>

</x-layout>