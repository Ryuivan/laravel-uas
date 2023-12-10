@extends('layouts.main')

@section('content')
<div class="bg-[#9a031e]">
  <div class="container mx-auto px-5 md:px-10 xl:px-20">
    <div class="py-20">
      <h1 class="text-3xl font-semibold text-white lg:text-5xl">Fasilitas</h1>
      <p class="mt-5 text-white text-lg lg:text-lg">Fasilitas yang dapat digunakan oleh siswa-siswi Sekolah Menengah
        Kejuruan Perguruan Buddhi.</p>
    </div>
  </div>
  <div class="bg-[#f7f7f7]">
    <div class="p-4 m-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
      <div class="bg-white p-4 shadow-md">
        <img src="{{ asset('assets/fasilitas/ruangkelas.png') }}" alt="Ruang Kelas"
        class="w-full h-48 object-cover rounded-md">
        <p class="mt-2 text-lg font-semibold">Ruang Kelas</p>
      </div>
      
      <div class="bg-white p-4 shadow-md">
        <img src="{{ asset('assets/fasilitas/ruangmusik.png') }}" alt="Ruang Musik"
        class="w-full h-48 object-cover rounded-md">
        <p class="mt-2 text-lg font-semibold">Ruang Musik</p>
      </div>
      <div class="bg-white p-4 shadow-md">
        <img src="{{ asset('assets/fasilitas/pojokbaca.png') }}" alt="Pojok Baca"
        class="w-full h-48 object-cover rounded-md">
        <p class="mt-2 text-lg font-semibold">Pojok Baca</p>
      </div>
      <div class="bg-white p-4 shadow-md">
        <img src="{{ asset('assets/fasilitas/mading.png') }}" alt="Mading" class="w-full h-48 object-cover rounded-md">
        <p class="mt-2 text-lg font-semibold">Mading</p>
      </div>
      
      <div class="bg-white p-4 shadow-md">
        <img src="{{ asset('assets/fasilitas/marketing.png') }}" alt="Marketing"
        class="w-full h-48 object-cover rounded-md">
        <p class="mt-2 text-lg font-semibold">Marketing</p>
      </div>
      <div class="bg-white p-4 shadow-md">
        <img src="{{ asset('assets/fasilitas/pojokprestasi.png') }}"" alt=" Pojok Prestasi"
        class="w-full h-48 object-cover rounded-md">
        <p class="mt-2 text-lg font-semibold">Pojok Prestasi</p>
      </div>
    </div>
  </div>
    @endsection