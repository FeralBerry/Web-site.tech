<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie6"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie7"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie8"> <![endif]-->
<!--[if IE 9 ]>
<html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class=""><!--<![endif]-->
@include('front.bovile.layout.head')
<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
<!-- Loader -->
<div id="site-loader" class="load-complete">
    <div class="loader">
        <div class="loader-inner ball-clip-rotate">
            <div></div>
        </div>
    </div>
</div><!-- Loader /- -->
<!--a id="top"></a-->
<!-- Main Container -->
<!-- Header -->
@include('front.bovile.layout.header')
@yield('content')
<!-- Footer Main -->
<footer class="footer-main container-fluid no-padding">
    <!-- Container -->
    <div class="container">
        <div class="row">
            <!-- Footer Location Widget -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <aside class="ftr-widget location-widget">
                    <h3 class="widget-title"><i><img src="{{ asset('front/bovile/images/ftr-location.png') }}"
                                                     alt="Location"/></i><span>Address</span></h3>
                    <p>09 Design Street, Downtown, Bovile, Victoria, Australia</p>
                </aside>
            </div><!-- Footer Location Widget /- -->
            <!-- Footer Phone Widget -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <aside class="ftr-widget phone-widget">
                    <h3 class="widget-title"><i><img src="{{ asset('front/bovile/images/ftr-phone.png') }}"
                                                     alt="Location"/></i><span>Call Us</span></h3>
                    <p><a href="tel:+9112345678" title="+9112345678">Mobile : +91 123 456 78</a>
                        <a href="tel:+9112345688" title="+9112345688">Toll free : +91 123 456 88</a></p>
                </aside>
            </div><!-- Footer Phone Widget /- -->
            <!-- Footer Mail Widget -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <aside class="ftr-widget mail-widget">
                    <h3 class="widget-title"><i><img src="{{ asset('front/bovile/images/ftr-email.png') }}"
                                                     alt="Location"/></i><span>email us</span></h3>
                    <p><a href="mailto:info@ourdomain.com" title="Info@OurDomain.Com">Info@OurDomain.Com</a>
                        <a href="mailto:support@ourdomain.com" title="Support@OurDomain.Com">Support@OurDomain.Com</a>
                    </p>
                </aside>
            </div><!-- Footer Mail Widget /- -->
            <!-- Footer Hours Widget -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <aside class="ftr-widget hours-widget">
                    <h3 class="widget-title"><i><img src="{{ asset('front/bovile/images/ftr-hours.png') }}"
                                                     alt="Location"/></i><span>working hours</span></h3>
                    <p><span>Mon-Sat : 9:00 AM To 5:00 PM</span><span>Sun : 9:00 AM To 2:00 PM</span></p>
                </aside>
            </div><!-- Footer Hours Widget /- -->
        </div>
        <!-- Footer About Widget -->
        <aside class="col-md-8 col-sm-6 col-xs-12 ftr-widget about-widget">
            <h3 class="widget-title">we are fishing</h3>
            <p>Beats all you've ever saw been in trouble with the law since the day they was born. Believe it or not I'm
                walking on air. I never thought I could feel so free.</p>
        </aside><!-- Footer About Widget /- -->
        <!-- Footer Newsleater Widget -->
        <aside class="col-md-4 col-sm-6 col-xs-12 ftr-widget newsleater-widget">
            <h3 class="widget-title">subscribe newsletter</h3>
            <!-- Search Box -->
            <div class="search-box">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Email Address">
                    <span class="input-group-btn">
							<button class="btn btn-default" type="button" title="Go">Go</button>
						</span>
                </div><!-- /input-group -->
            </div><!-- Search Box /- -->
        </aside><!-- Footer Newsleater Widget /- -->


        <!-- Footer Bottom -->
        <div class="footer-bottom col-md-12 col-sm-12 col-xs-12 no-padding">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-6 copyright">
                    <p>&copy; Copyright 2016. All Rights Reserved</p>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-6">
                    <ul>
                        <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" title="Linked In"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div><!-- Footer Bottom /- -->
    </div><!-- Container /- -->
</footer><!-- Footer Main /- -->

<!-- JQuery v1.11.3 -->
<script src="{{ asset('front/bovile/js/jquery.min.js') }}"></script>

<!-- Library Js -->
<script src="{{ asset('front/bovile/libraries/lib.js') }}"></script>

<!-- Library - Google Map API -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

<!-- Library - Theme JS -->
<script src="{{ asset('front/bovile/js/functions.js') }}"></script>
@include('layouts.front.disable_dev_tools')
</body>
