<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class=""><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="user_id" content="{{ Auth::id() || 0 }}">
    <title>Web Site Technologies</title>

    <!-- Standard Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('front/images/favicon.ico') }}" />

    <!-- For iPhone 4 Retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('front/images/apple-icon-114x114.png') }}">

    <!-- For iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('front/images/apple-icon-72x72.png') }}">

    <!-- For iPhone: -->
    <link rel="apple-touch-icon-precomposed" href="{{ asset('front/images/apple-icon-57x57.png') }}">

    <!-- Library - Bootstrap v3.3.5 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/remodal.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/remodal-default-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/libraries/lib.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/libraries/Stroke-Gap-Icon/stroke-gap-icon.css') }}">
    <!-- Custom - Common CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/plugins.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/navigation-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/libraries/lightslider-master/lightslider.css') }}">

    <!-- Custom - Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/shortcode.css') }}">
    <!--[if lt IE 9]>
    <script src="{{ asset('front/js/html5/respond.min.js') }}"></script>
    <![endif]-->
</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
<div id="site-loader" class="load-complete">
    <div class="loader">
        <div class="loader-inner ball-clip-rotate">
            <div></div>
        </div>
    </div>
</div>
<div id="app">
    @yield('content')
</div>
<script src="{{ asset('/front/js/jquery.min.js') }}"></script>
<script src="{{ asset('/front/libraries/lib.js') }}"></script>
<script src="{{ asset('/front/js/remodal.js') }}"></script>
<script src="{{ asset('/front/libraries/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('/front/libraries/lightslider-master/lightslider.js') }}"></script>
<script src="{{ asset('/front/js/functions.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.5/dist/js.cookie.min.js"></script>
<!--<script disable-devtool-auto src='https://cdn.jsdelivr.net/npm/disable-devtool@latest'></script>-->
@vite(['resources/js/app.js'])
<script>
    function registerValidator() {
        const name = document.getElementById('reg_name').value
        const pass = document.getElementById('reg_password').value
        const confirm = document.getElementById('reg_password-confirm').value

        if(name.length < 2 || name.length > 50){
            document.getElementById('reg_name_alert').style.display = 'block'
            setTimeout(() => {document.getElementById('reg_name_alert').style.display = 'none'}, 5000)
            return false;
        }
        if(pass.length < 7 || pass.length > 50){
            document.getElementById('reg_pass_alert').style.display = 'block'
            setTimeout(() => {document.getElementById('reg_pass_alert').style.display = 'none'}, 5000)
            return false;
        }
        if(pass !== confirm){
            document.getElementById('reg_confirm_alert').style.display = 'block'
            setTimeout(() => {document.getElementById('reg_confirm_alert').style.display = 'none'}, 5000)
            return false;
        }
        return true;
    }
    $('body').on('click', '.password-control', function(){
        if ($('#reg_password').attr('type') === 'password'){
            $(this).addClass('view');
            $('#reg_password').attr('type', 'text');
        } else {
            $(this).removeClass('view');
            $('#reg_password').attr('type', 'password');
        }
        if ($('#reg_password-confirm').attr('type') === 'password'){
            $(this).addClass('view');
            $('#reg_password-confirm').attr('type', 'text');
        } else {
            $(this).removeClass('view');
            $('#reg_password-confirm').attr('type', 'password');
        }
        return false;
    });
</script>
</body>
</html>
