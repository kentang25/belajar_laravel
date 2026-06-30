<x-layout>
    <div class="max-w-7xl mx-auto py-10 px-6">

        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">
                Data Posts
            </h1>

            <a href="/admin/create" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
                + Tambah Post
            </a>
        </div>

        @if(session('success'))
        <div class="mb-5 rounded-lg bg-green-100 border border-green-300 text-green-700 px-4 py-3">
            {{ session('success') }}
        </div>
        @endif

        <div class="overflow-x-auto bg-white rounded-xl shadow">

            <table class="min-w-full divide-y divide-gray-200">

                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-semibold">No</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Title</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Slug</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Author</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Category</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Created At</th>
                        <th class="px-6 py-3 text-center text-sm font-semibold">Action</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-100">

                    @forelse($posts as $post)

                    <tr class="hover:bg-gray-50">

                        <td class="px-6 py-4">
                            {{ $loop->iteration }}
                        </td>

                        <td class="px-6 py-4 font-medium">
                            {{ $post->title }}
                        </td>

                        <td class="px-6 py-4 text-gray-500">
                            {{ $post->slug }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $post->author->name }}
                        </td>

                        <td class="px-6 py-4">
                            <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded-full text-sm">
                                {{ $post->category->name }}
                            </span>
                        </td>

                        <td class="px-6 py-4">
                            {{ $post->created_at->format('d M Y') }}
                        </td>

                        <td class="px-6 py-4">
                            <div class="flex justify-center gap-2">

                                <a href="/admin/edit/{{ $post->id }}"
                                    class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded">
                                    Edit
                                </a>

                                <form action="/admin/delete/{{ $post->id }}" method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus data ini?')">

                                    @csrf
                                    @method('DELETE')

                                    <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">
                                        Delete
                                    </button>

                                </form>

                            </div>
                        </td>

                    </tr>

                    @empty

                    <tr>
                        <td colspan="7" class="text-center py-6 text-gray-500">
                            Belum ada data.
                        </td>
                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>
</x-layout>