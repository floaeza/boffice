<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .dropdown:focus-within .dropdown-menu {
          opacity:1;
          transform: translate(0) scale(1);
          visibility: visible;
        }
    </style>
</head>
<body>
    <div class="h-screen bg-gray-900 font-nunito">
        <div id="app">
            <nav class="bg-gray-800 shadow-sm">
                <div class="container flex items-center justify-between px-6 py-4 mx-auto">
                    <div>
                        <a class="text-xl text-white" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
                    </div>
                    @guest
                    <div>
                        @if (Route::has('login'))
                        
                            <a href="{{ route('login') }}" class="mx-4 font-light text-gray-400 hover:underline">{{ __('Login') }}</a>  
                        
                        @endif

                        @if(Route::has('register'))
                       
                            <a href="{{ route('register') }}" class="font-light text-gray-400 hover:underline">{{ __('Register') }}</a>  
                        
                        @endif
                   
                    @else
                                <div class="relative inline-block text-left dropdown">
                                    <span class="rounded-md shadow-sm">
                                        <button class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800" 
                                        type="button" aria-haspopup="true" aria-expanded="true" aria-controls="headlessui-menu-items-117">
                                            <span>
                                                {{ Auth::user()->name }}
                                            </span>
                                            <svg class="w-5 h-5 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        </button>
                                    </span>
                                    <div class="invisible transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 opacity-0 dropdown-menu">
                                        <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none" aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                                            <div class="py-1">
                                                <a href="{{ route('logout') }}" tabindex="3" class="flex justify-between w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" 
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                    @endguest
                    </div>
                </div>
            </nav>
    
            <main>
                <main class="py-4">
                    @yield('content')
                </main>
            </main>
        </div>
    </div>
</body>
</html>
