<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Horizon</title>

    <link rel="stylesheet" href="{{ asset("css/bootstrap.css") }}">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    @yield('style')

    @extends('common/head')
</head>

<body>
    @extends('common/navbar')

    @section('sidebar')
    This is the master sidebar.
    @show

    <h4>
        @yield('message-test')
    </h4>

    <div class="container">
        @yield('content')
    </div>

    @extends('common/footer')

    @yield('script')
</body>

</html>