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
        <div class="p-3 md:px-0 m-5 md:mx-0 flex flex-wrap justify-center animate__animated animate__slideInUp">
            @foreach($galleries as $gallery)
                <div class="m-3 sm:w-1/2 md:w-1/3 lg:w-1/3 xl:w-1/4 overflow-hidden aspect-video cursor-pointer rounded-xl relative group">
                    <div class="rounded-xl z-50 group-hover:opacity-100 transition duration-300 ease-in-out cursor-pointer absolute from-black/80 to-transparent bg-gradient-to-t inset-x-0 -bottom-2 pt-30 text-white flex items-end">
                        <div>
                            <div class="transform-gpu p-4 space-y-3 text-xl group-hover:opacity-100 group-hover:translate-y-0 translate-y-4 pb-10 transform transition duration-300 ease-in-out">
                                <div class="font-bold">{{ $gallery->name }}</div>
                            </div>
                        </div>
                    </div>
                    <img alt="{{ $gallery->name }} Image" class="object-cover w-full aspect-video group-hover:scale-110 transition duration-300 ease-in-out" src="{{ asset('storage/' . $gallery->gambar) }}">
                    <p class="absolute mt-4 text-lg font-semibold">{{ $gallery->name }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
