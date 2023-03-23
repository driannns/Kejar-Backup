<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>KeJar | Tech Jobs in Indonesia</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="icon" type="image/png" href="asset/logo.png" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500;600;700&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }

    </style>
    @vite('resources/css/app.css')
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex justify-between pt-6 sm:pt-0">
        <div class="w-5/12 h-screen" id="image"
            style="background-image: url('asset/login.png'); background-size: cover; background-repeat: no-repeat;  background-position: center; background-size: 100%;">

        </div>
        <div class="w-7/12 pl-14 pr-24">
            <div class="">
                <img src="/asset/logo.png" alt="Logo Kejar" width="179px">
            </div>
            <div class="w-full mt-6 px-6 py-4 mx-auto bg-white">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>

</html>
