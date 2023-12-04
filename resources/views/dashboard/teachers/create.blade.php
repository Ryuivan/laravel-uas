@extends('dashboard.index')

@section('content')
<div class="min-h-screen bg-[#f7f7f7] flex items-center justify-center w-full">
    <div class="bg-white p-8 rounded-md shadow-lg w-full max-w-md">
        <div class="text-2xl font-semibold mb-6">{{ __('Tambah Guru') }}</div>

        <form method="POST" action="{{ route('teachers.store') }}" class="space-y-4" enctype="multipart/form-data">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-gray-600">{{ __('Nama') }}</label>
                <input id="name" type="text"
                    class="form-input mt-1 block w-full border border-gray-300 @error('name') border-red-500 @enderror"
                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="gambar" class="block text-sm font-medium text-gray-600">{{ __('Gambar') }}</label>
                <input
                    class="form-input mt-1 block w-full mb-5 text-xs text-gray-900 border border-gray-300 cursor-pointer bg-gray-50 @error('gambar') border-red-500 @enderror"
                    id="gambar" type="file" value="{{ old('gambar') }}" name="gambar">

                @error('gambar')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <button type="submit" class="bg-[#213d5d] text-white px-4 py-2 rounded-md w-full">
                    {{ __('Tambah') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection