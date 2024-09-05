<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <style>
        #myVideo {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .overlay-content {
            position: relative;
            z-index: 1;
        }

        .overlay-bg {
            background-color: rgba(255, 255, 255, 0.7);
        }
    </style>

    <video autoplay muted loop id="myVideo">
        <source src="https://buddhastatuesrilanka.com/storage/images/66d9dc48ca385.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 overlay-content">
        <div>
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg overlay-bg">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
