@extends('dashboard.index')

@section('content')

<div class="w-full">
    <h1 class="ml-[5rem] mt-5 text-5xl">Welcome back, @auth {{ auth()->user()->name }} @endauth!</h1>
    <hr class="h-[2px] my-4 bg-gray-200 border-0 dark:bg-gray-700">
</div>

@endsection