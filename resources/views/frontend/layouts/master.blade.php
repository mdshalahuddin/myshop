<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Title -->
    <title>Home - AndShop</title>
    @include('frontend.layouts.inc.style')
</head>

<body>
    <!-- Preloader Area -->
    <div id="preloader">
        <div id="status">
            <img src="{{ asset('frontend') }}/assets/img/loader.gif" alt="img" />
        </div>
    </div>

    @include('frontend.layouts.inc.top-header')
    @include('frontend.layouts.inc.navbar')
    @include('frontend.layouts.inc.search')
    @yield('frontend_content')
    @include('frontend.layouts.inc.footer')
    @include('frontend.layouts.inc.script')
</body>

</html>
