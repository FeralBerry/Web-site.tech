<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
@if(isset($seo))
    @foreach($seo as $s)
        @if(Request::path() === $s->url)
            @if(isset($s->title))
                <title>{{ $s->title ? "Web site Technology" : ""}}</title>
            @endif
            @if(isset($s->keywords))
                <meta name="keywords" content="{{$s->keywords}}">
            @endif
            @if(isset($s->description))
                <meta name="description" content="{{$s->description}}">
            @endif
        @endif
    @endforeach
@endif



<!--favicon-->
<link rel="apple-touch-icon" href="{{ asset('base/theme/images/apple-touch-icon.png') }}">
<link rel="icon" href="{{ asset('base/theme/images/favicon.ico') }}">

<!--pace (page loader) style-->
<link href="{{ asset('base/plugins/pace/pace.css') }}" rel="stylesheet">
<script src="{{ asset('base/plugins/pace/pace.min.js') }}"></script>

<!-- Bootstrap -->
<link href="{{ asset('base/plugins/bootstrap-3.3.1/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- Icons -->
<link href="{{ asset('base/plugins/font-awesome-4.2.0/css/font-awesome.min.css') }}" rel="stylesheet">
<!-- typed style -->
<link href="{{ asset('base/plugins/typed/typed.css') }}" rel="stylesheet">
<!-- popup style-->
<link href="{{ asset('base/plugins/magnific-popup/magnific-popup.css') }}" rel="stylesheet">



<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Themes styles-->
<link href="{{ asset('base/theme/css/style.css') }}" rel="stylesheet">
<!-- black skin-->
<!-- <link href="{{ asset('base/assets/theme/css/skin-black.css') }}" rel="stylesheet"> -->
<link href="{{ asset('base/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('base/theme/css/right_click_menu.css') }}" rel="stylesheet">
