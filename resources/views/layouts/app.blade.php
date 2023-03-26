<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>KeJar | Tech Jobs in Indonesia</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="icon" type="image/png" href="/asset/logo.png" />
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        
        <!-- Scripts -->
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500;600;700&display=swap');
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased h-screen">
        <div class="bg-white" style="height: 12vh;">
            @include('layouts.navigation')
            <main style="height: 70vh">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>