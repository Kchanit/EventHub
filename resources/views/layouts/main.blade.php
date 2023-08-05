<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="color-scheme" content="light dark">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EventHub</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

@include('layouts.subviews.pre-navbar')
@include('layouts.subviews.pre-sidenav')

<body>


    <main class="bg-white w-full pt-10 px-4 sm:px-6 md:px-8 lg:pl-72 min-h-screen">
        @yield('content')
    </main>
    @yield('scripts')
</body>

</html>