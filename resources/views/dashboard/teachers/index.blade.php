@extends('dashboard.index')
@section('content')
<div class="container mx-auto px-5 md:px-10 xl:px-20 overflow-x-hidden">

    <h1 class="text-2xl mb-8 text-center font-semibold uppercase mt-16">Guru</h1>
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
    <div class="flex justify-end">
        <a href="/dashboard/teachers/create"
            class="transition duration-300 bg-[#315887] hover:bg-[#1C314C] text-white px-4 py-2 rounded-md mb-4">
            Tambah guru <i class="fa-solid fa-plus"></i>
        </a>
    </div>
    @if ($teachers->isEmpty())
    <div class="flex justify-center items-center h-32">
        <span class="text-gray-400 font-medium">Belum ada guru</span>
    </div>
    @else

    <div class="flex justify-center flex-wrap">
        @foreach ($teachers as $teacher)

        <div class="flex flex-col items-center my-5 mx-4 w-[400px] bg-white border border-gray-200 rounded-lg shadow md:flex-row">
            <img class="object-cover w-full rounded-t-lg h-56 md:h-48 md:w-48 md:rounded-none md:rounded-s-lg"
                src="{{ asset('storage/' . $teacher->gambar) }}" alt="{{ $teacher->name }}">
            <div class="flex flex-col w-52 justify-between p-4 leading-normal">
                <h5 class="mb-4 text-xl h-16 font-semibold tracking-tight text-gray-900">{{ $teacher->name }}</h5>
                <div class="flex space-x-2 justify-start">
                    <a href="/dashboard/teachers/{{ $teacher->id }}/edit"
                        class="transition duration-300 bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md">
                        <i class="fa-solid fa-edit"></i>
                    </a>
                    <form action="/dashboard/teachers/{{ $teacher->id }}" method="POST" class="">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus guru ini?')"
                            class="transition duration-300 bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                </div>
            </div>


        </div>
        @endforeach
    </div>

    {{-- <div class="relative overflow-x-auto">

        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-base text-gray-700 uppercase bg-gray-300">
                <tr>
                    <th scope="col" class="px-6 py-3">Nama</th>
                    <th scope="col" class="px-6 py-3">Dibuat oleh</th>
                    <th scope="col" class="px-6 py-3">Tanggal dibuat</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white border-b">
                @foreach ($teachers as $teacher)
                <tr class="text-sm">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{
                        $teacher->name }}</th>
                    <td class="px-6 py-4">{{ $teacher->user->name }}</td>
                    <td class="px-6 py-4">{{ $teacher->created_at }}</td>
                    <td class="px-6 py-4 flex space-x-1">
                        <a href="/dashboard/teachers/{{ $teacher->id }}"
                            class="transition duration-300 bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-md"><i
                                class="fa-solid fa-eye"></i></a>
                        <a href="/dashboard/teachers/{{ $teacher->id }}/edit"
                            class="transition duration-300 bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md">
                            <i class="fa-solid fa-edit"></i>
                        </a>
                        <form action="/dashboard/teachers/{{ $teacher->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                onclick="return confirm('Apakah anda yakin ingin menghapus guru ini?')"
                                class="transition duration-300 bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}
    @endif
</div>
@endsection