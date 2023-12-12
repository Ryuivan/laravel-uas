@extends('dashboard.index')

@section('content')

<div class="w-full bg-white rounded-lg shadow-md p-4 md:p-6 lg:p-8 xl:p-10 ml-12">
    <div class="w-full bg-cover bg-gray-100 rounded-lg shadow-md p-4 md:p-6 lg:p-8 xl:p-10 ml-auto">
    <div class="grid grid-cols-2 items-center">
            <h1 class="text-2xl md:text-3xl lg:text-5xl xl:text-5xl font-bold mb-2 md:mb-4 lg:mb-6 xl:mb-8 ml-1 whitespace-normal col-span-1">
                Welcome back, @auth {{ auth()->user()->name }} @endauth!
            </h1>
            <div class="px-6 py-4 col-span-1 flex justify-end">
                <a href="https://drive.google.com/file/d/1Doz7DeG4r9mk9egHwQPgzDDT-N1WxPpx/view?usp=sharing" target="_blank" class="bg-red-500 hover:bg-#f7f7f7-700 text-white font-bold py-2 px-4 rounded-full flex items-center">
                    <i class="fab fa-google-drive mr-2"></i>
                </a>
            </div>
        </div>
        <hr class="h-0.5 md:h-1 bg-gray-200 mb-2 md:mb-4 lg:mb-6 xl:mb-8 ml-1">

        <div class="flex flex-col md:flex-row items-start md:items-center">
            <div class="md:w-1/2">
                <p class="text-gray-600 ml-1 mb-2 md:mb-0 whitespace-normal">
                    Role:  @auth {{ auth()->user()->is_admin ? 'Admin' : 'User' }} @endauth
                </p>
            </div>
            <div class="md:w-1/2">
                <p class="text-gray-600 ml-1 whitespace-normal">
                    Email: @auth {{ auth()->user()->email }} @endauth
                </p>
            </div>
        </div>
    </div>
    
    <div class="max-w-1xl mx-auto py-8">
        <h1 class="font-semibold mb-4">Edit Page</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <a href="/dashboard/edit" class="bg-white rounded-lg shadow-md p-4 flex items-center justify-center hover:bg-gray-100 transition duration-300 ease-in-out">
                <span class="text-xl font-semibold">Card 1</span>
            </a>

            <a href="/dashboard/edit" class="bg-white rounded-lg shadow-md p-4 flex items-center justify-center hover:bg-gray-100 transition duration-300 ease-in-out">
                <span class="text-xl font-semibold">Card 2</span>
            </a>

            <a href="/dashboard/edit" class="bg-white rounded-lg shadow-md p-4 flex items-center justify-center hover:bg-gray-100 transition duration-300 ease-in-out">
                <span class="text-xl font-semibold">Card 3</span>
            </a>

            <a href="/dashboard/edit" class="bg-white rounded-lg shadow-md p-4 flex items-center justify-center hover:bg-gray-100 transition duration-300 ease-in-out">
                <span class="text-xl font-semibold">Card 4</span>
            </a>
        </div>
    </div>

</div>

@endsection