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

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased text-gray-900 bg-x-light-pink text-sm">
    <header class="flex flex-col md:flex-row items-center justify-between px-8 py-4">
        <a href="#">
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
                        Let use know what you would like and we will take a look
                    </p>
                </div>

                <form action="#" method="POST" class="space-y-4 px-4 py-6">
                    <div>
                        <input type="text" 
                            class="w-full bg-gray-100 rounded-xl placehold-gray-900 px-4 py-2 border-none text-sm 
                                    focus:ring-0 focus:border-x-blue/50"
                            placeholder="your idea">
                    </div>
                    <div>
                        <select name="category_add" id="category_add" class="w-full rounded-xl px-4 py-2 border-none focus:ring-0 bg-gray-100 text-sm">
                            <option value="Category One">Category One</option>
                            <option value="Category Two">Category Two</option>
                            <option value="Category Three">Category Three</option>
                            <option value="Category Four">Category Four</option>
                        </select>
                    </div>
                    <div>
                        <textarea name="idea" id="idea" cols="30" rows="4" 
                                  class="w-full bg-gray-100 rounded-xl placeholde-gray-900 text-sm px-4 py-2 border-none"
                                  placeholder="describe your idea"></textarea>
                    </div>
                    <div class="flex items-center justify-between space-x-3">
                        <button type="button"
                                class="flex items-center justify-center px-6 py-3 w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 
                                       transition ease-in duration-200 hover:border-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transform -rotate-45 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                            </svg>
                            <span class="ml-1">
                                Attach
                            </span>
                        </button>
                        <button type="submit"
                                class="flex items-center text-white justify-center px-6 py-3 w-1/2 h-11 text-xs bg-x-blue font-semibold rounded-xl border border-x-blue 
                                       transition ease-in duration-200 hover:bg-x-blue-hover">
                                Submit 
                        </button>
                    </div>
                </form>
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
</body>

</html>