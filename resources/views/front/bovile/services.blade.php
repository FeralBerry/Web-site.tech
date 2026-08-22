@extends('front.bovile.layout.layout')
@section('content')
    <main class="site-main page-spacing">
        <!-- Page Banner -->
        <div class="page-banner services-banner container-fluid no-padding">
            <div class="page-banner-content">
                <div class="container">
                    <h3>Who We Are</h3>
                    <p>You wanna be where you can see our troubles are all the same you wanna be where everybody knows Your name days are all share them with me oh baby are the voyages of the Starship Enterprise</p>
                </div>
            </div>
            <div class="banner-content container-fluid no-padding">
                <div class="container">
                    <h4 class="pull-left">Our Services</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Home</a></li>
                        <li class="active">Services</li>
                    </ol>
                </div>
            </div>
        </div><!-- Page Banner /- -->

        <!-- WhyChoose Us Section -->
        <div id="whychooseus" class="container-fluid no-padding whychoose-section">
            <div class="section-padding"></div>
            <!-- Container -->
            <div class="container">
                <!-- Section Header -->
                <div class="section-header">
                    <h3>Our Services</h3>
                    <p>Explore Our Features</p>
                </div><!-- Section Header /- -->
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="choose-box">
                            <img src="{{ asset('front/bovile/images/whychooseus/whychooseus1.jpg') }}" alt="whychooseus1"/>
                            <a href="#" title="Arrow" class="choose-next"><i class="fa fa-long-arrow-right"></i></a>
                            <div id="choose_shape-1" class="choose-shape">
                                <svg width="100%" height="100%">
                                    <clipPath id="choose-1" clipPathUnits="objectBoundingBox">
                                        <polygon points="0 0, 0 1, 1 1, 1 0.4"></polygon>
                                    </clipPath>
                                </svg>
                            </div>
                            <div id="choose_br_shape-1" class="choose-br-shape">
                                <svg width="100%" height="100%">
                                    <clipPath id="choose_br-1" clipPathUnits="objectBoundingBox">
                                        <polygon points="0 0, 0 1, 1 1, 1 0.41"></polygon>
                                    </clipPath>
                                </svg>
                            </div>
                            <div class="choose-content">
                                <span><i><img src="{{ asset('front/bovile/images/whychooseus/choose-ic1.png') }}" alt="whychooseus" /></i></span>
                                <h3>Most Experienced</h3>
                                <p>Take a step that is new. We've a loveable spa that needs your face threes company too.</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="choose-box">
                            <img src="{{ asset('front/bovile/images/whychooseus/whychooseus2.jpg') }}" alt="whychooseus1"/>
                            <a href="#" title="Arrow" class="choose-next"><i class="fa fa-long-arrow-right"></i></a>
                            <div id="choose_shape-2" class="choose-shape">
                                <svg width="100%" height="100%">
                                    <clipPath id="choose-2" clipPathUnits="objectBoundingBox">
                                        <polygon points="0 0, 0 1, 1 1, 1 0.4"></polygon>
                                    </clipPath>
                                </svg>
                            </div>
                            <div id="choose_br_shape-2" class="choose-br-shape">
                                <svg width="100%" height="100%">
                                    <clipPath id="choose_br-2" clipPathUnits="objectBoundingBox">
                                        <polygon points="0 0, 0 1, 1 1, 1 0.41"></polygon>
                                    </clipPath>
                                </svg>
                            </div>
                            <div class="choose-content">
                                <span><i><img src="{{ asset('front/bovile/images/whychooseus/choose-ic2.png') }}" alt="whychooseus" /></i></span>
                                <h3>Tips &amp; Advice</h3>
                                <p>Take a step that is new. We've a loveable spa that needs your face threes company too.</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="choose-box">
                            <img src="{{ asset('front/bovile/images/whychooseus/whychooseus3.jpg') }}" alt="whychooseus1"/>
                            <a href="#" title="Arrow" class="choose-next"><i class="fa fa-long-arrow-right"></i></a>
                            <div id="choose_shape-3" class="choose-shape">
                                <svg width="100%" height="100%">
                                    <clipPath id="choose-3" clipPathUnits="objectBoundingBox">
                                        <polygon points="0 0, 0 1, 1 1, 1 0.4"></polygon>
                                    </clipPath>
                                </svg>
                            </div>
                            <div id="choose_br_shape-3" class="choose-br-shape">
                                <svg width="100%" height="100%">
                                    <clipPath id="choose_br-3" clipPathUnits="objectBoundingBox">
                                        <polygon points="0 0, 0 1, 1 1, 1 0.41"></polygon>
                                    </clipPath>
                                </svg>
                            </div>
                            <div class="choose-content">
                                <span><i><img src="{{ asset('front/bovile/images/whychooseus/choose-ic3.png') }}" alt="whychooseus" /></i></span>
                                <h3>Latest Equipments</h3>
                                <p>Take a step that is new. We've a loveable spa that needs your face threes company too.</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="choose-box">
                            <img src="{{ asset('front/bovile/images/whychooseus/whychooseus4.jpg') }}" alt="whychooseus1"/>
                            <a href="#" title="Arrow" class="choose-next"><i class="fa fa-long-arrow-right"></i></a>
                            <div id="choose_shape-4" class="choose-shape">
                                <svg width="100%" height="100%">
                                    <clipPath id="choose-4" clipPathUnits="objectBoundingBox">
                                        <polygon points="0 0, 0 1, 1 1, 1 0.4"></polygon>
                                    </clipPath>
                                </svg>
                            </div>
                            <div id="choose_br_shape-4" class="choose-br-shape">
                                <svg width="100%" height="100%">
                                    <clipPath id="choose_br-4" clipPathUnits="objectBoundingBox">
                                        <polygon points="0 0, 0 1, 1 1, 1 0.41"></polygon>
                                    </clipPath>
                                </svg>
                            </div>
                            <div class="choose-content">
                                <span><i><img src="{{ asset('front/bovile/images/whychooseus/choose-ic4.png') }}" alt="whychooseus" /></i></span>
                                <h3>Quick Membership</h3>
                                <p>Take a step that is new. We've a loveable spa that needs your face threes company too.</p>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Container /- -->
            <div class="section-padding"></div>
        </div><!-- WhyChoose Us Section /- -->

        <!-- Choose Accessories -->
        <div id="accessories-section" class="accessories-section container-fluid no-padding">
            <div class="section-padding"></div>
            <div class="accessories-img-box col-md-6">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="wheels">
                        <div class="accessories-img img1"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="lure">
                        <div class="accessories-img img2"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="lines">
                        <div class="accessories-img img3"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="rods">
                        <div class="accessories-img img4"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="bags">
                        <div class="accessories-img img5"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="wheels1">
                        <div class="accessories-img img1"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-7 accessories-tab-box">
                <!-- Section Header -->
                <div class="section-header">
                    <h3>Choose Your accessories</h3>
                    <p>Shop By Categories</p>
                </div><!-- Section Header /-  -->
                <!-- Nav tabs -->
                <div class="nav nav-tabs" role="tablist">
                    <a href="#wheels" aria-controls="wheels" role="tab" data-toggle="tab" class="active">
                        <i><img src="{{ asset('front/bovile/images/accessories/accessories-ic1.png') }}" alt="Accessories Icon" /></i>
                        <span>Fishing wheels</span>
                    </a>
                    <a href="#lure" aria-controls="lure" role="tab" data-toggle="tab">
                        <i><img src="{{ asset('front/bovile/images/accessories/accessories-ic2.png') }}" alt="Accessories Icon" /></i>
                        <span>Fishing lure</span>
                    </a>
                    <a href="#lines" aria-controls="lines" role="tab" data-toggle="tab">
                        <i><img src="{{ asset('front/bovile/images/accessories/accessories-ic3.png') }}" alt="Accessories Icon" /></i>
                        <span>Fishing lines</span>
                    </a>
                    <a href="#rods" aria-controls="rods" role="tab" data-toggle="tab">
                        <i><img src="{{ asset('front/bovile/images/accessories/accessories-ic4.png') }}" alt="Accessories Icon" /></i>
                        <span>Fishing rods</span>
                    </a>
                    <a href="#bags" aria-controls="bags" role="tab" data-toggle="tab">
                        <i><img src="{{ asset('front/bovile/images/accessories/accessories-ic5.png') }}" alt="Accessories Icon" /></i>
                        <span>Fishing bags</span>
                    </a>
                    <a href="#wheels1" aria-controls="wheels1" role="tab" data-toggle="tab">
                        <i><img src="{{ asset('front/bovile/images/accessories/accessories-ic1.png') }}" alt="Accessories Icon" /></i>
                        <span>Fishing wheels</span>
                    </a>
                </div>
            </div>
            <div class="section-padding"></div>
        </div><!-- Choose Accessories /- -->

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
                                    <li>25 Fishing Lure's</li>
                                    <li>Basic Fishing Stick</li>
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
    </main>
@endsection
