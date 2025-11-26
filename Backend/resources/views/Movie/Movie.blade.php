<x-app-layout>
    <div class="py-20">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" dark:bg-gray-800 overflow-hidden">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-4xl font-bold mt-3">{{ __("Browse Movies") }}</h1>
                    <p class="mb-3">Discover your next favorite film from our collection</p>
                    <div>
                        <label class="relative block w-full max-w-sm">
                    <!-- Icon -->
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>

                    <!-- Input -->
                    <input
                        type="search"
                        placeholder="Search movies..."
                        required
                        class="w-full py-2 pl-10 pr-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-700"
                    />
                    </label>

                    <div class="mt-5 mb-2">
                        <button class="btn bg-gray-500 rounded-full p-4 text-white">All</button>
                        <button class="btn bg-gray-500 rounded-full p-4 text-white">Action</button>
                        <button class="btn bg-gray-500 rounded-full p-4 text-white">Sci-Fi</button>
                        <button class="btn bg-gray-500 rounded-full p-4 text-white">Crime</button>
                        <button class="btn bg-gray-500 rounded-full p-4 text-white">Drama</button>
                        <button class="btn bg-gray-500 rounded-full p-4 text-white">Adventure</button>
                        <button class="btn bg-gray-500 rounded-full p-4 text-white">Romance</button>
                    </div>
                    <div>
                    <h1>Popular Movies</h1>
                    
                    <div class="card bg-base-100 w-96 shadow-lg">
                        <figure>
                        <img
                            src="{{asset('assets/image5.png')}}"
                            alt="Shoes" />
                        </figure>
                        <div class="card-body">
                        <h2 class="card-title">The Dark Knight</h2>
                        <p>2008</p>
                        <div style="display: flex; gap: 10px">
                            <p class="bg-gray-500 rounded-full text-center w-[50px] text-white">Action</p>
                            <p class="bg-gray-500 rounded-full text-center text-white">Crime</p>
                        </div>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
