@extends('front.clothing.layout.layout')
@section('breadcrumb')
    @include('front.clothing.layout.breadcrumb')
@endsection
@section('content')
    <!--Total area start-->
    <div class="col-xs-12 text-center">
        <div class="heading-title heading-style pos-rltv mtb-50 text-center">
            <h5 class="uppercase">Product Banner 01</h5>
        </div>
    </div>
    <div class="clearfix"></div>
    <!--banner-area-are-start-->
    <div class="banner-area mt-30">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="banner-area-left ">
                        <div class="banner-single pos-rltv fix mb-30">
                            <div class="banner-img">
                                <img src="{{ asset('front/clothing/images/product/banner-01.jpg') }}" alt="">
                            </div>
                            <div class="banner-content">
                                <div class="heading-title big-title heading-style pos-rltv">
                                    <h3 class=""><a href="#">Best Collection For Men</a></h3>
                                </div>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p> <a href="#" class="btn-def" tabindex="0">Shop Now</a>
                            </div>
                        </div>
                        <div class="banner-single pos-rltv fix">
                            <div class="banner-img left-type">
                                <img src="{{ asset('front/clothing/images/product/banner-02.jpg') }}" alt="">
                            </div>
                            <div class="banner-content left-type">
                                <div class="heading-title big-title heading-style pos-rltv">
                                    <h3 class=""><a href="#">Women's Fashion</a></h3>
                                </div>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p> <a href="#" class="btn-def" tabindex="0">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 hidden-sm col-xs-12">
                    <div class="banner-img-2 pos-rltv"> <img src="{{ asset('front/clothing/images/product/banner-03.jpg') }}" alt="">
                        <div class="banner-timer shadow-box-2">
                            <div class="timer-wraper text-center">
                                <div class="timer timr-2">
                                    <div data-countdown="2015/02/01"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner-content-2 mt-25">
                        <div class="heading-title big-title">
                            <h3 class=""><a href="#">Luxary Products</a></h3>
                        </div>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                        <a href="#" class="btn-def" tabindex="0">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner-area-are-end-->

    <div class="col-xs-12 text-center">
        <div class="heading-title heading-style pos-rltv mtb-50 text-center">
            <h5 class="uppercase">Product Banner 02</h5>
        </div>
    </div>
    <div class="clearfix"></div>
    <!--banner area start-->
    <div class="banner-area  mb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="single-banner gray-bg">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="sb-img text-center">
                                    <img src="{{ asset('front/clothing/images/banner/02.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="sb-content mt-60">
                                    <div class="banner-text">
                                        <h5 class="lato">New Arrival</h5>
                                        <h2 class="montserrat">Grag T- Shirt</h2>
                                        <h3 class="montserrat">$99.99</h3>
                                        <div class="banner-list">
                                            <ul>
                                                <li>Best quality</li>
                                                <li>Best quality</li>
                                                <li>Best quality</li>
                                            </ul>
                                        </div>
                                        <div class="social-icon-wraper mt-25">
                                            <div class="social-icon socile-icon-style-1">
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-shopping-cart"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i></a></li>
                                                    <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal" tabindex="0"><i class="zmdi zmdi-eye"></i></a></li>
                                                    <li><a href="#"><i class="zmdi zmdi-repeat"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="single-banner gray-bg">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="sb-img text-center">
                                    <img src="{{ asset('front/clothing/images/banner/01.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="sb-content mt-60">
                                    <div class="banner-text">
                                        <h5 class="lato">New Arrival</h5>
                                        <h2 class="montserrat">Grag T- Shirt</h2>
                                        <h3 class="montserrat">$99.99</h3>
                                        <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                        <a class="btn-def btn2" href="#">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->
    @include('front.clothing.section.quickview')
@endsection
