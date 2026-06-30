<x-layout>
    <div class="mx-auto py-4 px-10">
        <form action="/admin/insert" method="Post">
            <label class="block">Title :</label>
            <input type="text" name="title" class="border p-2 rounded-lg mt-2">
    
            <label class="block">Slug :</label>
            <input type="text" name="slug" class="border p-2 rounded-lg mt-2">
    
            <label class="block">Content :</label>
            <input type="text" name="content" class="border p-2 rounded-lg mt-2">

            <label>Author</label>
            <select name="author_id">
                @foreach($authors as $author)
                    <option value="{{ $author->id }}">
                        {{ $author->name }}
                    </option>
                @endforeach
            </select>

            <label>Category</label>
            <select name="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>

            <button type="submit" class="py-2 px-4 rounded-lg bg-blue-400 text-white block mt-10 hover:bg-blue-500 cursor-defauld">Submit</button>
        </form>
    </div>
</x-layout>