<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <link rel="icon" href="{{ Vite::asset('/resources/images/favicon.ico') }}" type="image/x-icon">
    <title>Laravel Comics - @yield('document-title')</title>

    @vite('resources/js/app.js')
</head>

<body>
    @include('./partials/header')
    @yield('main-title')
    @include('./partials/footer')
</body>

</html>