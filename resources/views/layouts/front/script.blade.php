<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('base/plugins/jquery.js') }}"></script>
<script src="{{ asset('base/plugins/bootstrap-3.3.1/js/bootstrap.min.js') }}"></script>

<!-- advanced easing options -->
<script src="{{ asset('base/plugins/jquery.easing-1.3.pack.js') }}"></script>
<!-- parallax bg js -->
<script src="{{ asset('base/plugins/jquery.parallax-1.1.3.js') }}"></script>
<!-- lightbox js -->
<script src="{{ asset('base/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<!-- typed animation-->
<script src="{{ asset('base/plugins/typed/typed.js') }}"></script>
<!-- easy chart-->
<script src="{{ asset('base/plugins/easypiechart/jquery.easypiechart.min.js') }}"></script>
<!-- simple Captcha -->
<script src="{{ asset('base/plugins/simpleCaptcha/jquery.simpleCaptcha.js') }}"></script>
<!-- simple Ajax Uploader -->
<script src="{{ asset('base/plugins/Simple-Ajax-Uploader/SimpleAjaxUploader.min.js') }}"></script>
<!-- validate jquery-->
<script src="{{ asset('base/plugins/validator/jquery.validate.min.js') }}"></script>

<!--=====================================================-->
<!--configuration template-->
<script src="{{ asset('base/theme/js/theme.js') }}"></script>
<script>
    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
    });
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function(m,e,t,r,i,k,a){
        m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)
    })(window, document,'script','https://mc.yandex.ru/metrika/tag.js?id=105941561', 'ym');

    ym(105941561, 'init', {ssr:true, webvisor:true, clickmap:true, ecommerce:"dataLayer", accurateTrackBounce:true, trackLinks:true});
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/105941561" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
