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
    <header class="flex items-center justify-between px-8 py-4">
        <a href="#">
            <img src="{{ asset('images/logo1.png') }}" alt="lightning bolt" class="w-32">
        </a>
        <div class="flex items-center">
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

    <main class="container mx-auto flex max-w-custom">
        <div class="w-70 mr-5">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur atque adipisci nam iure, ducimus, impedit autem iusto minus neque nostrum, blanditiis mollitia? Ducimus recusandae sint, rem ab totam perferendis voluptate ad dignissimos! Quis quibusdam esse quidem quo. Aspernatur expedita similique enim inventore tempore eos, at eaque totam nobis sit sapiente sint doloribus repudiandae itaque deserunt pariatur possimus nostrum perspiciatis minima, architecto dolorum fugit alias obcaecati dolor! Consequatur perspiciatis in error suscipit dolorem deserunt ipsam nihil expedita, laudantium magni non accusantium reiciendis qui ratione aspernatur quas, natus corrupti vel dolores quasi nam quis at dignissimos. Laudantium praesentium laborum quas nostrum voluptatem!
        </div>
        <div class="w-175">
            <nav class="flex items-center justify-between text-xs">
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