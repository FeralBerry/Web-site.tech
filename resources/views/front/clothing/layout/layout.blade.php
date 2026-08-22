<!doctype html>
<html class="no-js" lang="en">
@include('front.clothing.layout.head')
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Body main wrapper start -->
<div class="wrapper home-one">
    @include('front.clothing.layout.header')
    @yield('breadcrumb')
    @yield('content')
    @include('front.clothing.layout.footer')
</div>
@include('front.clothing.layout.script')

</body>

</html>
