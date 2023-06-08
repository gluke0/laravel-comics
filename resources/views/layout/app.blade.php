<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titlePage')</title>
    @vite('resources/js/app.js')
</head>
<body>
    
    <!-- header static -->
    @include('partials.header')

    <main>
        <!-- content dynamic -->
        @yield('content')
    </main>

    <!-- footer static -->
    @include('partials.footer')

</body>
</html>

