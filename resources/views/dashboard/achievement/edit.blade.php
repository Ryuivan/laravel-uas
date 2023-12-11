@extends('dashboard.index')

@section('content')
<div class="min-h-screen bg-[#f7f7f7] flex items-center justify-center w-full">
    <div class="bg-white p-8 rounded-md shadow-lg w-full max-w-md">
        <div class="text-2xl font-semibold mb-6">{{ __('Edit Achievement') }}</div>

        <form method="POST" action="{{ route('achievement.update', $prestasi->id) }}" class="space-y-4"
            enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-gray-600">{{ __('Name') }}</label>
                <input id="name" type="text"
                    class="form-input mt-1 block w-full border border-gray-300 @error('name') border-red-500 @enderror"
                    name="name" value="{{ $prestasi->name }}" required autocomplete="name" autofocus>

                @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="gambar" class="block text-sm font-medium text-gray-600">{{ __('Image') }}</label>
                <input type="hidden" name="oldImage" value="{{ $prestasi->image }}">
                @if ($prestasi->gambar)
                <img src="{{ asset('storage/' . $prestasi->gambar) }}" alt="{{ $prestasi->name }}"
                    class="img-preview my-3 h-60 mx-auto block">
                @else
                <img class="img-preview">
                @endif

                <img class="img-preview">
                <input
                    class="mt-1 block w-full mb-5 text-xs text-gray-900 border border-gray-300 cursor-pointer bg-gray-50 @error('gambar') border-red-500 @enderror"
                    id="gambar" type="file" value="{{ 'storage/' . $prestasi->gambar }}" name="gambar"
                    onchange="previewImage()">

                @error('gambar')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <button type="submit" class="bg-[#213d5d] text-white px-4 py-2 rounded-md w-full">
                    {{ __('Update') }}
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function previewImage() {
        const image = document.querySelector('#gambar');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';
        imgPreview.style.height = '15rem';
        imgPreview.style.margin = '0.75rem auto';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
            imgPreview.alt = image.files[0].name;
        }
    }

</script>
@endsection