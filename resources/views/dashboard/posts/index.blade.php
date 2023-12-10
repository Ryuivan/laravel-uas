@extends('dashboard.index')

@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


@section('content')
<div class="container mx-auto px-5 md:px-10 xl:px-20 overflow-x-hidden">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    <a href="/dashboard/posts/create">Creata new post</a>
    </button>

    @if (!count($posts))
        <h1 class="text-2xl text-center py-10">Tidak ada posts!</h1>
        
    @else
        {{-- @foreach ()

        @endforeach --}}
    @endif

</div>

@endsection