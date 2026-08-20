<!-- META TAGS -->
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- LINK TAGS -->
<title>Montserrat</title>


<link rel='stylesheet' href='{{asset('front/monsterat/css/settings.css')}}' type='text/css' media='all' />
<link rel='stylesheet' href='{{asset('front/monsterat/css/dynamic-styles.css')}}' type='text/css' media='all' />
<link rel='stylesheet' href='{{asset('front/monsterat/css/icomoon.css')}}' type='text/css' media='all' />
<link rel='stylesheet' href='{{asset('front/monsterat/css/header-im.css')}}' type='text/css' media='all' />



@if(
    Route::currentRouteName() == "monsterat-index" ||
    Route::currentRouteName() == "monsterat-index-pricing" ||
    Route::currentRouteName() == "monsterat-index-products" ||
    Route::currentRouteName() == "monsterat-index-history" ||
    Route::currentRouteName() == "monsterat-index-popular-video" ||
    Route::currentRouteName() == "monsterat-index-animated" ||
    Route::currentRouteName() == "monsterat-index-one_page" ||
    Route::currentRouteName() == "monsterat-index-simple"
)
    <link rel='stylesheet' href='{{asset('front/monsterat/css/default.css')}}' type='text/css' media='all' />
@endif
@if(
    Route::currentRouteName() == "monsterat-index-popular-slider" ||
    Route::currentRouteName() == "monsterat-index-store" ||
    Route::currentRouteName() == "monsterat-index-shop"
)
    <link rel='stylesheet' href='{{asset('front/monsterat/css/header-black.css')}}' type='text/css' media='all' />
@endif
@if(
    Route::currentRouteName() == "monsterat-header"
)
    <link rel='stylesheet' href='{{asset('front/monsterat/css/header-v'.$id.'.css')}}' type='text/css' media='all' />
@endif


<link rel='stylesheet' href='{{asset('front/monsterat/css/style.css')}}' type='text/css' media='all' />
<link rel='stylesheet' href='{{asset('front/monsterat/css/js_composer.min.css')}}' type='text/css' media='all' />

<link href="https://fonts.googleapis.com/css?family=Abril+Fatface%7CMontserrat:300,400,500,600,700%7COpen+Sans:300,400,600,700,700i,800&amp;subset=latin-ext" rel="stylesheet">

<link rel="icon" href="{{asset('front/monsterat/upload/cropped-apple_favicon-90x90.png')}}" sizes="32x32" />
<link rel="icon" href="{{asset('front/monsterat/upload/cropped-apple_favicon-300x300.png')}}" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="{{asset('front/monsterat/upload/cropped-apple_favicon-300x300.png')}}" />

