@extends('layouts.main')

@section('content')
<div>
    <div class="bg-[#134271]">
        <div class="container mx-auto px-5 md:px-10 xl:px-20">
            <div class="py-20">
                <h1 class="text-3xl font-semibold text-white lg:text-5xl">Visi dan Misi</h1>
                <p class="mt-5 text-white text-lg lg:text-lg">Visi dan Misi Sekolah Menengah Kejuruan Perguruan Buddhi.
                </p>
            </div>
        </div>
        <div class="bg-[#f7f7f7]">
            <div class="container mx-auto py-24 px-5 md:px-10 xl:px-20">
                <h1 class="text-center text-4xl font-semibold">Visi dan Misi</h1>
                <div class="flex flex-wrap flex-col md:flex-row">
                    <div class="mt-8 md:mt-0 md:w-1/2 px-8">
                        <h1 class="text-center text-3xl font-medium">Visi</h1>
                        <p class="font-normal text-base mt-5 text-justify">Membentuk manusia yang unggul dalam
                            intelektual, terampil dalam bekerja, handal dalam beriwrausaha dan terpuji dalam moral.</p>
                    </div>
                    <div class="mt-8 md:mt-0 md:w-1/2 px-8">
                        <h1 class="text-center text-3xl font-medium">Misi</h1>
                        <ol class="list-decimal font-normal text-base mt-5 text-justify">
                            <li>Menyelenggarakan pendidikan dan pelatihan yang berbasis produktif.</li>
                            <li>Meningkatkan kualitas organisasi dna menajemen sekolah dalam menumbuhkan semangat keunggulan dan kompetitif.</li>
                            <li>Meningkatkan kualitas KBM dalam mencapai kompetensi siswa berstandar nasional/internasional.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection