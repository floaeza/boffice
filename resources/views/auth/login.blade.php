@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center mx-6 mt-16">
    <div class="w-full max-w-sm p-6 bg-gray-800 rounded-md shadow">
        <h3 class="text-xl text-center text-white">Login</h3>
        <form class="mt-4" method="POST" action="{{ route('login') }}">
            @csrf
            <label class="block">
                <span class="text-sm text-white">{{ __('Email Address') }}</span>
                <input type="email" id="email" name="email" class="form-input mt-1 block w-full rounded-md bg-gray-800 border-gray-700 text-white @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </label>

            <label class="block mt-3">
                <span class="text-sm text-white">{{ __('Password') }}</span>
                <input id="password" type="password" class="form-input mt-1 block w-full rounded-md bg-gray-800 border-gray-700 text-white @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </label>

            <div class="flex items-center justify-between mt-4">
                <div>
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="text-blue-500 bg-gray-800 border-gray-600 form-checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <span class="mx-2 text-sm text-gray-200">{{ __('Remember Me') }}</span>
                    </label>
                </div>
                @if (Route::has('password.request'))
                <div>
                    <a class="block text-sm text-blue-500 hover:underline" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </div>
                @endif
            </div>
            <div class="mt-6">
                <button type="submit" class="w-full px-4 py-2 text-sm text-center text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none">
                    {{ __('Login') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection