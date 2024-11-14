<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title_page')</title>
    @yield('style_head')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <main class="min-h-screen w-full flex items-center justify-center bg-gray-50 md:bg-white">
        @yield('form')
    </main>
</body>

</html>
