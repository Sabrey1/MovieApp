<x-app-layout>
    <div class="relative">
    
    @include('layouts.CarouselBackground')

    <div class="absolute inset-0 flex items-center justify-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" text-white text-center">
                <h1 class="text-7xl font-bold ">{{ __("Welcome to CineVault") }}</h1>
                <h1 class="mb-3">{{ __("Explore thousands of movies, discover hidden gems, and keep track of your favorites") }}</h1>
                <button class="btn p-2 bg-red-500 hover:bg-red-600">
                   <i class="fa-solid fa-play"></i>
                    Watch Now
                </button>
                 <button class="btn p-2 bg-gray-400 hover:bg-gray-600">More Info</button>
            </div>
        </div>
    </div>

</div>
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                     @include('Body.BodyPage')
                </div>
            </div>
        </div>
</div>
 
    
 

</x-app-layout>
