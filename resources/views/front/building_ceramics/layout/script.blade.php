<!-- JQuery v1.11.3 -->
<script src="{{ asset('front/building_ceramics/js/jquery.min.js',true) }}"></script>

<!-- Library - Js -->
<script src="{{ asset('front/building_ceramics/libraries/lib.js',true) }}"></script><!-- Bootstrap JS File v3.3.5 -->
<script src="{{ asset('front/building_ceramics/libraries/jquery.countdown.min.js',true) }}"></script>

<script src="{{ asset('front/building_ceramics/libraries/lightslider-master/lightslider.js',true) }}"></script>
<!-- Library - Google Map API -->
<script src="{{ asset('front/building_ceramics/js/functions.js',true) }}"></script>
<script>
    window.onload = function() {
        setTimeout(() => {
            var img = document.getElementById('slider_img');

            document.getElementById('main_slider').style.height = img.height.toString() + 'px'
        },100)

    }
    function click_call(){
        let modalWindow = document.getElementById('click_call_modal')
        let modalWindowBG = document.getElementById('click_call_modal_bg')
        modalWindow.style.display = 'block'
        modalWindowBG.style.display = 'block'
    }
    function close_click_call_modal(){
        let modalWindow = document.getElementById('click_call_modal')
        let modalWindowBG = document.getElementById('click_call_modal_bg')
        modalWindow.style.display = 'none'
        modalWindowBG.style.display = 'none'
    }
</script>
@include('layouts.front.disable_dev_tools')
