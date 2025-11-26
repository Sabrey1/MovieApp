<x-app-layout>
    <div class="relative">
    
    @include('layouts.CarouselBackground')

    <div class="absolute inset-0 flex items-center justify-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 bg-opacity-50 p-6 rounded-lg text-white text-center">
                {{ __("This is Home Page") }} <br>
                {{ __("This is Home Page") }} <br>
                {{ __("This is Home Page") }} <br>
                {{ __("This is Home Page") }} <br>
            </div>
        </div>
    </div>

</div>
</x-app-layout>
