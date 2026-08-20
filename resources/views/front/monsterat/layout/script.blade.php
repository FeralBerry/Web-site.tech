<a id="top" href="#wrap"></a>

<script type="text/javascript" src="{{ asset('front/monsterat/js/jquery/jquery.js') }}" ></script>
<script type="text/javascript" src="{{ asset('front/monsterat/js/jquery/jquery-migrate.min.js') }}" ></script>
<script type="text/javascript" src="{{ asset('front/monsterat/js/jquery.blockUI.min.js') }}" ></script>
<script type='text/javascript' src="{{ asset('front/monsterat/js/woocommerce.min.js') }}" ></script>
<script type='text/javascript' src="{{ asset('front/monsterat/js/smoothscroll.js') }}" ></script>
<script type='text/javascript' src="{{ asset('front/monsterat/js/isotope.pkgd.min.js') }}" ></script>
<script type='text/javascript' src="{{ asset('front/monsterat/js/plugins.js') }}" ></script>
<script type='text/javascript' src="{{ asset('front/monsterat/js/controller.js') }}" defer></script>

<script type='text/javascript' src="{{ asset('front/monsterat/js/contact-form.js') }}" ></script>
<script type='text/javascript' src="{{ asset('front/monsterat/js/js_composer_front.min.js') }}"></script>

<script type='text/javascript' src="{{ asset('front/monsterat/js/jquery.themepunch.tools.min.js') }}"></script>
<script type='text/javascript' src="{{ asset('front/monsterat/js/jquery.themepunch.revolution.min.js') }}" ></script>
<script type="text/javascript"
        src="{{ asset('front/monsterat/js/extensions/revolution.extension.slideanims.min.js') }}" ></script>
<script type="text/javascript"
        src="{{ asset('front/monsterat/js/extensions/revolution.extension.layeranimation.min.js') }}" ></script>
<script type="text/javascript"
        src="{{ asset('front/monsterat/js/extensions/revolution.extension.navigation.min.js') }}" ></script>
<script type="text/javascript"
        src="{{ asset('front/monsterat/js/extensions/revolution.extension.actions.min.js') }}" ></script>
<script type="text/javascript"
        src="{{ asset('front/monsterat/js/extensions/revolution.extension.carousel.min.js') }}"  ></script>
<script type="text/javascript"
        src="{{ asset('front/monsterat/js/extensions/revolution.extension.kenburn.min.js') }}" ></script>
<script type="text/javascript"
        src="{{ asset('front/monsterat/js/extensions/revolution.extension.migration.min.js') }}" ></script>
<script type="text/javascript"
        src="{{ asset('front/monsterat/js/extensions/revolution.extension.parallax.min.js') }}"  ></script>
<script type="text/javascript"
        src="{{ asset('front/monsterat/js/extensions/revolution.extension.video.min.js') }}" ></script>

@if(
    Route::currentRouteName() == "monsterat-index" ||
    Route::currentRouteName() == "monsterat-index-pricing" ||
    Route::currentRouteName() == "monsterat-header"
)
    @include('front.monsterat.pages.slider.1.slider_script')
@endif

@if(
    Route::currentRouteName() == "monsterat-index-products" ||
    Route::currentRouteName() == "monsterat-index-history" ||
    Route::currentRouteName() == "monsterat-index-popular-video"

)
    @include('front.monsterat.pages.slider.2.slider_script')
@endif
@if(
    Route::currentRouteName() == "monsterat-index-animated" ||
    Route::currentRouteName() == "monsterat-index-one_page" ||
    Route::currentRouteName() == "monsterat-index-simple"
)
    @include('front.monsterat.pages.slider.3.slider_script')
@endif
@if(
    Route::currentRouteName() == "monsterat-index-popular-slider"
)
    @include('front.monsterat.pages.slider.4.slider_script')
@endif
@if(
    Route::currentRouteName() == "monsterat-index-store"
)
    @include('front.monsterat.pages.slider.5.slider_script')
@endif
@if(
    Route::currentRouteName() == "monsterat-index-shop"
)
    @include('front.monsterat.pages.slider.6.slider_script')
@endif
