@extends('layouts.main')

@section('content')
  <h1 class="text-3xl font-bold underline text-green-500">Hello
    @if (isset($name))
      {{ $name }}
    @endif
    
  </h1>
  <div class="banner">
    {{-- <img src="{{ asset('assets/buddhi.jpg') }}" alt="Banner"> --}}
    <!-- Add any additional elements or styling as needed -->
</div>

@endsection