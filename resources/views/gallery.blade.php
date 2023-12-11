@extends('layouts.main')

@section('content')
<div class="bg-[#9a031e]">
    <div class="container mx-auto px-5 md:px-10 xl:px-20">
        <div class="py-20">
            <h1 class="text-3xl font-semibold text-white lg:text-5xl">Gallery</h1>
            <p class="mt-5 text-white text-lg lg:text-lg">Foto dokumentasi siswa-siswi Sekolah Menengah Kejuruan Perguruan Buddhi.</p>
        </div>
    </div>
    <div class="bg-[#f7f7f7] p-4">
        {{-- <div class="grid grid-cols-2 md:grid-cols-3 gap-4"> --}}
        <div class="p-3 md:px-0 m-5 md:mx-0 flex flex-wrap justify-center animate__animated animate__slideInUp">
            @foreach($galleries as $gallery)
                <div class="m-3 sm:w-1/2 md:w-1/3 lg:w-1/3 xl:w-1/4">
                    <img src="{{ asset('storage/' . $gallery->gambar) }}" alt="{{ $gallery->name }} Image" class="w-full h-52 rounded-md">
                    {{-- <p class="mt-4 text-lg font-semibold">{{ $gallery->name }}</p> --}}
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
