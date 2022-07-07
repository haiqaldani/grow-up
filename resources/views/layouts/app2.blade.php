<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')

    <title>@yield('title')</title>
</head>

<body>

    <div class="screen-cover d-none d-xl-none"></div>

    <div class="row">
        @include('includes.sidebar')


        <div class="col-12 col-xl-9">
            @include('includes.navbar')

            @yield('content')
        </div>
    </div>



    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')


</body>

</html>
