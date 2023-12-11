@extends('layouts.main')

@section('content')

<div class="owl-carousel owl-theme w-full">
    @foreach($carousels as $carousel)

    <div class="item">
        <img src="{{ asset('storage/' . $carousel->gambar) }}" alt="{{ $carousel->name }}"
            class="min-w-screen object-cover h-96 brightness-50 h-[650px]">

        <div class="absolute text-white top-1 p-8 md:max-w-lg lg:max-w-xxl lg:top-10 lg:left-10">
            <h1 class="text-white italic text-xl sm:text-2xl md:text-3xl">
                Selamat Datang @auth, {{ auth()->user()->name }}@endauth
            </h1>
            <h1 class="mt-2 text-white font-bold text-3xl md:text-4xl lg:text-5xl">SMK Buddhi Kota Tangerang</h1><br />
            <h5 class="text-white text-justify md:text-left lg:text-lg">SMK Buddhi membentuk manusia yang unggul dalam
                intelektual, terampil dalam bekerja, handal dalam berwirausaha dan terpuji dalam moral.</h5>
        </div>
    </div>

    @endforeach
</div>

<div class="py-8 bg-[#f7f7f7]">
    <div class="text-center">
        <h1 class="text-4xl font-semibold my-4 text-[#213d5d]">Publikasi</h1>
        <h1 class="text-1xl font-normal mb-4 text-[#213d5d]">Berita, Kegiatan Siswa, dan Artikel Sekolah.</h1>
    </div>
        
    <div class="flex flex-wrap justify-center space-x-20 py-8">
        @foreach($posts as $post)
        <div class="max-w-sm min-h-md max-h-md bg-white border border-gray-200 rounded-lg shadow">
            <a href="/posts/{{ $post->slug }}">
                @if ($post->image)
                <img class="rounded-t-lg object-cover w-full h-60" src="{{ 'storage/' . $post->image }}"
                    alt="{{ $post->title }}" />
                @else
                <img class="rounded-t-lg object-cover w-full h-60" src="{{ asset('assets/profile/imagenull.png') }}"
                    alt="{{ $post->title }}" />
                @endif
            </a>
            <div class="p-5 h-full">
                <a href="/posts/{{ $post->slug }}">
                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900">{{ $post->title }}</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 text-justify h-52">{{ $post->excerpt }}</p>
                <a href="/posts/{{ $post->slug }}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="py-8 bg-[#f7f7f7]">
    <h1 class="text-4xl my-4 text-[#213d5d] ">Prestasi Siswa</h1>
    <h1 class="mb-4 text-[#213d5d]">Galeri prestasi yang diraih oleh siswa SMK Buddhi</h1>
    <div class="flex flex-wrap justify-center flex-row gap-4">
        @foreach($prestasis->take(4) as $prestasi)
        <div class="w-full">
            <div class="mx-auto max-w-sm">
                <div class="bg-white p-5 shadow-md rounded-md text-center">
                    <img src="{{ asset('storage/' . $prestasi->gambar) }}" alt="{{ $prestasi->name }} Image"
                        class="w-full object-cover rounded-md h-80">
                    <p class="mt-4 text-lg font-semibold">{{ $prestasi->name }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="mt-8">
        <a href="/prestasi" class="block w-32 py-2 text-center text-white bg-red-500 rounded-md hover:bg-red-600">Load
            More</a>
    </div>
</div>

<script type="text/javascript">
    $(".owl-carousel").owlCarousel({
            loop: true,
            nav: false,
            dots: false,
            touchDrag: false,
            mouseDrag: false,
            autoplay: true,
            autoplayTimeout: 3000,
            items: 1,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
        });
</script>

@endsection