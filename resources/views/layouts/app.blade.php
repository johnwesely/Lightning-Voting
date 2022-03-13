<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Lightning Voting</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <livewire:styles/>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body class="font-sans antialiased text-gray-900 bg-x-light-pink text-sm">
    <header class="flex flex-col md:flex-row items-center justify-between px-8 py-4">
        <a href="/">
            <img src="{{ asset('images/logo1.png') }}" alt="lightning bolt" class="w-32">
        </a>
        <div class="flex items-center mt-2 md:mt-0">
            @if (Route::has('login'))
            <div class="px-6 py-4">
                @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>
                @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
                @endauth
            </div>
            @endif
            <a href="#">
                <img src="https://www.gravatar.com/avatar/00000?d=mp" alt="avatar" class="w-10 h-10 rounded-full">
            </a>
        </div>
    </header>

    <main class="container mx-auto flex max-w-custom flex-col md:flex-row">
        <div class="w-70 mx-auto md:mx-0 md:mr-5">
            <div class="md:sticky md:top-8 border-2 border-x-blue rounded-xl mt-16 bg-white">
                <div class="text-center px-6 py-2 pt-6">
                    <h3 class="font-semibold text-base">
                        Add an idea
                    </h3>
                    <p class="text-xs mt-4">
                        @auth
                            Let use know what you would like and we will take a look
                        @else    
                            Please log in to create an idea
                        @endauth
                    </p>
                </div>

                @auth
                    <livewire:create-idea />
                @else
                    <div class="my-6 text-center">
                        <a href="{{ route('login') }}"
                           class="text-white px-6 py-3 w-1/2 h-11 text-xs bg-x-blue font-semibold rounded-xl border border-x-blue 
                                    transition ease-in duration-200 hover:bg-x-blue-hover">
                            Log In 
                        </a> 
                        <a href="{{ route('register') }}"
                           class="px-6 py-3 w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 
                           transition ease-in duration-200 hover:border-gray-400 ml-4">
                                Register 
                        </a>
                    </div>
                @endauth
            </div>
        </div>
        <div class="w-full md:w-175 px-2 md:px-0">
            <nav class="hidden md:flex items-center justify-between text-xs">
                <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                    <li><a href="#", class="border-b-4 pb-3 border-x-blue">All Ideas (87)</a></li>
                    <li><a href="#", class="text-gray-600 transition duration-200 ease-in border-b-4 pb-3 hover:border-x-blue">considering (87)</a></li>
                    <li><a href="#", class="text-gray-600 transition duration-200 ease-in border-b-4 pb-3 hover:border-x-blue">in progress (87)</a></li>
                </ul>
                <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                    <li><a href="#", class="text-gray-600 transition duration-200 ease-in border-b-4 pb-3 hover:border-x-blue">implemented (87)</a></li>
                    <li><a href="#", class="text-gray-600 transition duration-200 ease-in border-b-4 pb-3 hover:border-x-blue">closed (87)</a></li>
                </ul>
            </nav>
            <div class="mt-8">
                {{ $slot }}
            </div>
        </div>
    </main>
    <livewire:scripts />
</body>

</html>