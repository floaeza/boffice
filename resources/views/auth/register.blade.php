@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center mx-6 mt-16">
    <div class="w-full max-w-sm p-6 bg-gray-800 rounded-md shadow">
        <h3 class="text-xl text-center text-white">{{ __('Register') }}</h3>
        <form class="mt-4" method="POST" action="{{ route('register') }}">
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
            <label class="block">
                <span class="text-sm text-white">{{ __('Name') }}</span>
                <input type="text" id="name" name="name" class="form-input mt-1 block w-full rounded-md bg-gray-800 border-gray-700 text-white @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </label>

            <label class="block mt-3">
                <span class="text-sm text-white">{{ __('Password') }}</span>
                <input id="password" type="password" class="form-input mt-1 block w-full rounded-md bg-gray-800 border-gray-700 text-white @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </label>
            <label class="block mt-3">
                <span class="text-sm text-white">{{ __('Password') }}</span>
                <input id="password-confirm" type="password" class="form-input mt-1 block w-full rounded-md bg-gray-800 border-gray-700 text-white @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
            </label>
            <div class="mt-6">
                <button type="submit" class="w-full px-4 py-2 text-sm text-center text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
