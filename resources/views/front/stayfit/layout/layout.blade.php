<!DOCTYPE html>
<html>
<head>
    @include('front.stayfit.layout.head')
</head>
<body>
<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>
    @include('front.stayfit.layout.header')
    @yield('content')
    @include('front.stayfit.layout.footer')
</div>

@include('front.stayfit.layout.script')

</body>
</html>
