<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    @include('frontend.layouts.header')
</head>
<body id="bg" class="theme-sharped">
    <!-- page start -->
    <div class="page leading-normal tracking-normal text-white" style="font-family: 'Poppins', sans-serif;">
        @include('frontend.layouts.nav')
        <div class="site-main">
            @yield('content')
            @include('frontend.layouts.footer')
        </div>
    </div>
    @yield('js')
</body>
</html>
