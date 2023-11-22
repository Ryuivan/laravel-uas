@extends('layouts.main')

@section('content')
<div class="min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-md shadow-md w-full max-w-md">
        <div class="text-2xl font-semibold mb-6">{{ __('Login') }}</div>

        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            <div>
                <label for="email" class="block text-sm font-medium text-gray-600">{{ __('Email Address') }}</label>
                <input id="email" type="email" class="form-input mt-1 block w-full border border-gray-300 @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-600">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-input mt-1 block w-full border border-gray-300 @error('password') border-red-500 @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center">
                <input class="form-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember" class="ml-2 text-sm">{{ __('Remember Me') }}</label>
            </div>

            <div>
                <button type="submit" class="bg-[#213d5d] text-white px-4 py-2 rounded-md w-full">
                    {{ __('Login') }}
                </button>
            </div>

            @if (Route::has('password.request'))
                <a class="text-blue-500 text-sm hover:text-gray-300" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </form>
    </div>
</div>
@endsection
