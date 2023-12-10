@extends('layouts.main')

@section('content')
<div class="bg-[#9a031e]">
    <div class="container mx-auto px-5 md:px-10 xl:px-20">
        <div class="py-20">
            <h1 class="text-3xl font-semibold text-white lg:text-5xl">Ekstrakurikuler</h1>
            <p class="mt-5 text-white text-lg lg:text-lg">Ekstrakurikuler yang dapat dipilih oleh siswa-siswi Sekolah Menengah Kejuruan Perguruan Buddhi.</p>
        </div>
    </div>
    <div class="bg-[#f7f7f7] p-4">
        <div class="p-5 m-5 flex flex-wrap gap-6 justify-center">
            @foreach($ekstrakurikulers as $ekstrakurikuler)
                <div class="m-5 bg-white p-4 shadow-md">
                    <p class="mb-2 text-lg font-semibold">{{ $ekstrakurikuler->name }}</p>
                    <img src="{{ asset('storage/' . $ekstrakurikuler->gambar) }}" alt="{{ $ekstrakurikuler->name }} Image" class="w-64 h-48 object-cover rounded-md">
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection