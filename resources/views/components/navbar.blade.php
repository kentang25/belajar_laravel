<nav class="bg-gray-900 border-b border-gray-700">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex h-16 items-center justify-between">

            {{-- Logo + Menu --}}
            <div class="flex items-center gap-8">

                <a href="/" class="flex-shrink-0">
                    <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Logo"
                        class="h-8 w-8">
                </a>

                <div class="hidden md:flex items-center gap-2">
                    <a href="/" class="px-3 py-2 rounded-md text-sm font-medium text-white bg-gray-800">
                        Home
                    </a>

                    <a href="/blog"
                        class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-800">
                        Blog
                    </a>

                    <a href="/about"
                        class="px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:bg-gray-800">
                        About
                    </a>
                </div>

            </div>

            {{-- Search --}}
            <div class="hidden md:flex flex-1 justify-center px-8">

                <form action="/post" method="GET" class="w-full max-w-md">
                    @if(request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif

                    @if(request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif

                    <div class="flex gap-2">
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari artikel..."
                            class="flex-1 rounded-lg bg-gray-800 border border-gray-700 px-4 py-2 text-white placeholder-gray-400 focus:border-blue-500 focus:outline-none">

                        <button type="submit" class="px-4 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-white">
                            Search
                        </button>
                    </div>
                </form>

            </div>

            {{-- Profile --}}
            <div class="flex items-center gap-4">

                <button class="text-gray-400 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31" />
                    </svg>
                </button>

                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e" alt="Profile"
                    class="h-8 w-8 rounded-full object-cover">
            </div>

        </div>
    </div>
</nav>