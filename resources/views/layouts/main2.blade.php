<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EventHub</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

@include('layouts.subviews.mega-menu')
@include('layouts.subviews.nav-tabs')

<body>
    <main class="bg-white content w-full sm:px-6 md:px-8 lg:px-10 lg:py-4 min-h-screen">

        @yield('content')
    </main>
    @yield('scripts')
</body>

@include('layouts.subviews.footer')

</html>
