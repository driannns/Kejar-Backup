<!DOCTYPE html>
<html lang="en">

<head>
    <title>KeJar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="asset/logo.png" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style/output.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500;600;700&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }

    </style>
    @vite('resources/css/app.css')
</head>

<body>
    <!-- NAVBAR -->
    <nav class="w-full h-[88px] border text-[16px] bg-white">
        <div class="flex h-[88px] justify-between items-center mx-10">
            <div class="">
                <a href="/"><img src="asset/logo.png" alt="" width="99px"></a>
            </div>
            <div class="font-medium">
                <ul class="flex px-2.5">
                    <li class="mr-12">
                    <a href="/">
                            Home
                        </a>
                    </li>
                    <li class="mr-12">
                    <a href="/jobs">
                            Find Job
                        </a>
                    </li>
                    <li class="mr-12">
                    <a href="">
                            Career Resource
                        </a>
                    </li>
                    <li class="">
                    <a href="">
                            About
                        </a>
                    </li>
                </ul>
            </div>
            @if (Route::has('login'))
            <div class=" p-6 text-right">
                @auth
                <a href="{{ url('/dashboard') }}"
                    class="font-medium text-gray-600 hover:text-gray-900 dark:text-white dark:hover:text-gray-400 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                <a href="{{ route('login') }}"
                    class="font-medium text-gray-600 hover:text-gray-900 dark:text-white dark:hover:text-gray-400 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                    <button class="w-[100px] h-[38px] bg-[#2C00D5] rounded-lg mr-[21px]">Log in</button>
                </a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="ml-4 font-medium text-gray-600 hover:text-gray-900 dark:text-white dark:hover:text-gray-400 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                    <button class="w-[100px] h-[38px] bg-[#2C00D5] rounded-lg mr-[21px]">Register</button>
                </a>
                @endif
                @endauth
            </div>
            @endif
        </div>
    </nav>
    @yield('content')

</body>
