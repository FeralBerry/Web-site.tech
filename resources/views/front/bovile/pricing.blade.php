@extends('front.bovile.layout.layout')
@section('content')
    <main class="site-main page-spacing">
        <!-- Page Banner -->
        <div class="page-banner pricing-banner container-fluid no-padding">
            <div class="page-banner-content">
                <div class="container">
                    <h3>Select A Plan</h3>
                    <p>You wanna be where you can see our troubles are all the same you wanna be where everybody knows Your name days are all share them with me oh baby are the voyages of the Starship Enterprise</p>
                </div>
            </div>
            <div class="banner-content container-fluid no-padding">
                <div class="container">
                    <h4 class="pull-left">Different Schemes</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Pricing</li>
                    </ol>
                </div>
            </div>
        </div><!-- Page Banner /- -->

        <!-- Price Section -->
        <div class="price-section container-fluid no-padding">
            <div class="section-padding"></div>
            <div class="container">
                <!-- Section Header -->
                <div class="section-header">
                    <h3>Pricing Plans</h3>
                    <p>Explore Our Features</p>
                </div><!-- Section Header /-  -->
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="price-box">
                            <div class="price-img-box">
                                <img src="{{ asset('front/bovile/images/pricing/pricing-1.jpg') }}" alt="pricing-1">
                                <div class="price-title">
                                    <h4><sub>$</sub>49</h4>
                                    <h3>Regular</h3>
                                    <p>Monthly Plan</p>
                                </div>
                            </div>
                            <div class="price-content">
                                <ul>
                                    <li>25 Bovile Lure's</li>
                                    <li>Basic Bovile Stick</li>
                                    <li>Regular Life Jacket</li>
                                    <li>Safety Equipments</li>
                                    <li>4 Thread Wheels</li>
                                </ul>
                                <a href="#" title="Select Plan">Select Plan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="price-box">
                            <div class="price-img-box">
                                <img src="{{ asset('front/bovile/images/pricing/pricing-2.jpg') }}" alt="pricing-2">
                                <div class="price-title">
                                    <h4><sub>$</sub>69</h4>
                                    <h3>Standard</h3>
                                    <p>Monthly Plan</p>
                                </div>
                            </div>
                            <div class="price-content">
                                <ul>
                                    <li>45 Fishing Lure's</li>
                                    <li>Basic Fishing Rod</li>
                                    <li>Regular Life Jacket</li>
                                    <li>Swim Pads</li>
                                    <li>7 Thread Wheels</li>
                                </ul>
                                <a href="#" title="Select Plan">Select Plan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="price-box">
                            <div class="price-img-box">
                                <img src="{{ asset('front/bovile/images/pricing/pricing-3.jpg') }}" alt="pricing-3">
                                <div class="price-title">
                                    <h4><sub>$</sub>89</h4>
                                    <h3>Premium</h3>
                                    <p>Monthly Plan</p>
                                </div>
                            </div>
                            <div class="price-content">
                                <ul>
                                    <li>75 Fishing Lure's</li>
                                    <li>Pro Fishing Rod</li>
                                    <li>Premium Life Jacket</li>
                                    <li>Diving Equipments</li>
                                    <li>10 Thread Wheels</li>
                                </ul>
                                <a href="#" title="Select Plan">Select Plan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="price-box">
                            <div class="price-img-box">
                                <img src="{{ asset('front/bovile/images/pricing/pricing-4.jpg') }}" alt="pricing-4">
                                <div class="price-title">
                                    <h4><sub>$</sub>99</h4>
                                    <h3>Ultimate</h3>
                                    <p>Monthly Plan</p>
                                </div>
                            </div>
                            <div class="price-content">
                                <ul>
                                    <li>100 Fishing Lure's</li>
                                    <li>Fishing Rod with Wheel</li>
                                    <li>Secured Life Gaurd</li>
                                    <li>Full Diving Equipments</li>
                                    <li>12 Thread Wheels</li>
                                </ul>
                                <a href="#" title="Select Plan">Select Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Container /- -->
            <div class="section-padding"></div>
        </div><!-- Price Section /- -->


        <!-- Gear Section -->
        <div id="gear-section" class="container-fluid no-padding gear-section">
            <div class="section-padding"></div>
            <!-- Container -->
            <div class="container">
                <!-- Section Header -->
                <div class="section-header">
                    <h3>the fishing gear you need</h3>
                    <p>Wide Variety Of Top Quality Fly Fishing Tackle</p>
                </div><!-- Section Header /-  -->
                <div class="gear-carousel">
                    <div class="gear-box">
                        <a href="#" title="">
                            <img src="{{ asset('front/bovile/images/gear/gear1.jpg') }}" alt="Gear" />
                            <span>Fishing Rod</span>
                        </a>
                    </div>
                    <div class="gear-box">
                        <a href="#" title="">
                            <img src="{{ asset('front/bovile/images/gear/gear2.jpg') }}" alt="Gear" />
                            <span>Fishing reel</span>
                        </a>
                    </div>
                    <div class="gear-box">
                        <a href="#" title="">
                            <img src="{{ asset('front/bovile/images/gear/gear3.jpg') }}" alt="Gear" />
                            <span>Fishing lure</span>
                        </a>
                    </div>
                    <div class="gear-box">
                        <a href="#" title="">
                            <img src="{{ asset('front/bovile/images/gear/gear1.jpg') }}" alt="Gear" />
                            <span>Fishing Rod</span>
                        </a>
                    </div>
                </div>
            </div><!-- Container /- -->
            <div class="white-seprator"></div>
        </div><!-- Gear Section /- -->

        <!-- Testimonial Section -->
        <div class="container-fluid no-padding testimonial-section">
            <div class="section-padding"></div>
            <!-- Container -->
            <div class="container">
                <!-- Section Header -->
                <div class="section-header">
                    <h3>words from our clients</h3>
                    <p>Feedback From Our Trusted Clients</p>
                </div><!-- Section Header /- -->
                <div class="row">
                    <!-- Product Carousel -->
                    <div class="testimonial-carousel">
                        <div class="col-md-12">
                            <div class="testimonial-block">
                                <div class="testimonial-content">
                                    <img src="{{ asset('front/bovile/images/testimonial/testimonial1.jpg') }}" alt="testimonial1"/>
                                    <p>The ship set ground on the shore of this uncharted desert isle with Gilligan the Skipper too millionaire and his wife Well the first thing you</p>
                                </div>
                                <p>Chris mikaale -<span> Happy Customer</span></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="testimonial-block">
                                <div class="testimonial-content">
                                    <img src="{{ asset('front/bovile/images/testimonial/testimonial2.jpg') }}" alt="testimonial1"/>
                                    <p>Fish don't fry in the kitchen and beans don't burn on the grill. Took a whole lotta tryin' just to get up that hill. A man is born he's a man of means.
                                </div>
                                <p>Merlen brando  -<span> Happy Customer</span></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="testimonial-block">
                                <div class="testimonial-content">
                                    <img src="{{ asset('front/bovile/images/testimonial/testimonial1.jpg') }}" alt="testimonial1"/>
                                    <p>The ship set ground on the shore of this uncharted desert isle with Gilligan the Skipper too millionaire and his wife Well the first thing you</p>
                                </div>
                                <p>Chris mikaale -<span> Happy Customer</span></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="testimonial-block">
                                <div class="testimonial-content">
                                    <img src="{{ asset('front/bovile/images/testimonial/testimonial2.jpg') }}" alt="testimonial1"/>
                                    <p>Fish don't fry in the kitchen and beans don't burn on the grill. Took a whole lotta tryin' just to get up that hill. A man is born he's a man of means.
                                </div>
                                <p>Merlen brando  -<span> Happy Customer</span></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="testimonial-block">
                                <div class="testimonial-content">
                                    <img src="{{ asset('front/bovile/images/testimonial/testimonial1.jpg') }}" alt="testimonial1"/>
                                    <p>The ship set ground on the shore of this uncharted desert isle with Gilligan the Skipper too millionaire and his wife Well the first thing you</p>
                                </div>
                                <p>Chris mikaale -<span> Happy Customer</span></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="testimonial-block">
                                <div class="testimonial-content">
                                    <img src="{{ asset('front/bovile/images/testimonial/testimonial2.jpg') }}" alt="testimonial1"/>
                                    <p>Fish don't fry in the kitchen and beans don't burn on the grill. Took a whole lotta tryin' just to get up that hill. A man is born he's a man of means.
                                </div>
                                <p>Merlen brando  -<span> Happy Customer</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Container /- -->
            <div class="section-padding"></div>
        </div><!-- Testimonial Section /- -->

        <!-- Clients -->
        <div class="clients container-fluid no-padding">
            <!-- Container -->
            <div class="container">
                <div class="row">
                    <div class="clients-carousel">
                        <div class="col-md-12 item"><a href="#" title="client"><img src="{{ asset('front/bovile/images/clients/client-1.png') }}" alt="client-1"/></a></div>
                        <div class="col-md-12 item"><a href="#" title="client"><img src="{{ asset('front/bovile/images/clients/client-2.png') }}" alt="client-2"/></a></div>
                        <div class="col-md-12 item"><a href="#" title="client"><img src="{{ asset('front/bovile/images/clients/client-3.png') }}" alt="client-3"/></a></div>
                        <div class="col-md-12 item"><a href="#" title="client"><img src="{{ asset('front/bovile/images/clients/client-4.png') }}" alt="client-4"/></a></div>
                        <div class="col-md-12 item"><a href="#" title="client"><img src="{{ asset('front/bovile/images/clients/client-5.png') }}" alt="client-5"/></a></div>
                    </div>
                </div>
            </div><!-- Container / -->
        </div><!-- Clients / -->

    </main>
@endsection
