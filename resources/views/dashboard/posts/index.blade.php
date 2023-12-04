@extends('dashboard.index')

@section('content')
<div class="container mx-auto px-5 md:px-10 xl:px-20 overflow-x-hidden">

    @if (!count($posts))
        <h1 class="text-2xl text-center py-10">Tidak ada posts!</h1>
        
    @else
        {{-- @foreach ()

        @endforeach --}}
    @endif

</div>

@endsection