@extends('dashboard.index')

@section('content')

<div class="container mx-auto px-5 md:px-10 xl:px-20 overflow-x-hidden">
    <h1 class="text-2xl mb-8 text-center font-semibold uppercase mt-16">Categories</h1>
    @if (session()->has('success'))
    <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50"
        role="alert">
        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="currentColor" viewBox="0 0 20 20">
            <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
        </svg>
        <span class="sr-only">Info</span>
        <div>
            <span class="font-medium">{{ session('success') }}</span>
        </div>
    </div>
    @endif
    <div class="flex flex-wrap justify-center space-x-5 md:justify-between">
        <a href="/dashboard/categories/create"
            class="transition duration-300 bg-[#315887] hover:bg-[#1C314C] text-white px-4 py-2 rounded-md mb-4">
            Add Category <i class="fa-solid fa-plus"></i>
        </a>
        <form action="/dashboard/categories">
            <input type="text" name="search"
                class="border border-gray-200 rounded-md p-2 focus:outline-none h-9 w-40 md:w-60" placeholder="Search"
                value="{{ request('search') }}">
            <button type="submit"
                class="inline transition duration-300 bg-[#315887] hover:bg-[#1C314C] text-white px-4 py-2 rounded-md mb-4">
                <i class="fa-solid fa-search"></i>
            </button>
        </form>
    </div>
    @if ($categories->isEmpty())
    <div class="flex justify-center items-center h-32">
        <span class="text-gray-400 font-medium">Category not found</span>
    </div>
    @else
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-base text-gray-700 uppercase bg-gray-300">
                <tr>
                    <th scope="col" class="px-6 py-3">ID</th>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">Slug</th>
                    <th scope="col" class="px-6 py-3">Created at</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white border-b">
                @foreach ($categories as $category)
                <tr class="text-sm">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{
                        $category->id }}</th>
                    <td class="px-6 py-4">{{ $category->name }}</td>
                    <td class="px-6 py-4">{{ $category->slug }}</td>
                    <td class="px-6 py-4">{{ $category->created_at }}</td>
                    <td class="px-6 py-4">
                        <a href="/dashboard/categories/{{ $category->id }}/edit"
                            class="transition duration-300 bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md">
                            <i class="fa-solid fa-edit"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>

@endsection
