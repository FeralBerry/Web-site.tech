<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
    @include('front.jahanrahat.layout.head')
</head>

<body>
@include('front.jahanrahat.layout.header')
<div id="#top"></div>
@yield('content')
@include('front.jahanrahat.layout.footer')
<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a>

@include('front.jahanrahat.layout.scripts')
</body>
</html>
