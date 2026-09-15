<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SEGES Dimak') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased text-gray-100 bg-slate-950 selection:bg-[#0066b2] selection:text-white min-h-screen">
    <div class="min-h-screen flex flex-col justify-center items-center p-4 bg-gradient-to-br from-slate-950 via-[#0b1329] to-[#040817] relative overflow-hidden">
        <!-- Ambient glow background -->
        <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-blue-600/15 rounded-full blur-3xl pointer-events-none"></div>

        <div class="w-full sm:max-w-md relative z-10">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
