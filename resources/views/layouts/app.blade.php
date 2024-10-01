<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <title>@yield('title', "BNKP Jemaat Hiligeo")</title>

    <!-- Loading third party fonts -->
    <link href="https://fonts.googleapis.com/css?family=Belgrano:400" rel="stylesheet" type="text/css">
    <link href="{{ asset('fonts/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Loading main css file -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @stack('head')

</head>
<body>
    <div class="site-content">
        @include('partials.header')

        @yield('content')

        @include('partials.footer')
    </div>

    @stack('scripts')
</body>
</html>
