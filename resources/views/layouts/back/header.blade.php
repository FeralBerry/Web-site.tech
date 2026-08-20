@if(Route::currentRouteName() === 'register')
    <header class="sp-header">
        <div class="sp-logo-wrap pull-left">
            <a href="{{ route('front-index') }}">
<!--                <img class="brand-img mr-10" src="dist/img/logo.png" alt="brand"/>-->
                <span class="brand-text">Web-site.tech</span>
            </a>
        </div>
        <div class="form-group mb-0 pull-right">
            <span class="inline-block pr-10">Already have an account?</span>
            <a class="inline-block btn btn-info btn-rounded btn-outline" href="{{ route('login') }}">Sign In</a>
        </div>
        <div class="clearfix"></div>
    </header>
@elseif(Route::currentRouteName() === 'login')
    <header class="sp-header">
        <div class="sp-logo-wrap pull-left">
            <a href="{{ route('front-index') }}">
                <!--                <img class="brand-img mr-10" src="dist/img/logo.png" alt="brand"/>-->
                <span class="brand-text">Web-site.tech</span>
            </a>
        </div>
        <div class="form-group mb-0 pull-right">
            <span class="inline-block pr-10">Don't have an account?</span>
            <a class="inline-block btn btn-info btn-rounded btn-outline" href="{{ route('register') }}">Sign Up</a>
        </div>
        <div class="clearfix"></div>
    </header>
@endif
