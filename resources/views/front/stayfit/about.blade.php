@extends('front.stayfit.layout.layout')
@section('content')
    <!--Page Banner -->
    <section class="page-banner" style="background-image:url({{ asset('front/stayfit/images/background/page-banner-bg.jpg') }})">
        <div class="auto-container">
            <h1>ABOUT US</h1>
        </div>
    </section>

    <br><br>
    <!--Two Column-->
    <section class="two-column">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Who we are-->
                <div class="col-md-7 col-sm-6 col-xs-12">

                    <div class="who-we-are">
                        <div class="sec-title">
                            <h3>OUR PHILOSOPHY</h3>
                            <h2>WHAT WE DO AND WHO WE ARE?</h2>
                        </div>
                        <div class="sec-text clearfix">
                            <p>As a member you can also access our pool and tennis courts for free and have priority for booking any of the pre-book activities, classes or sessions that we run. If you don’t want to commit to being a member you can still use all of our facilities but you will need to have an induction session before using the facilities to ensure that Health and Safety requirements are met – you don’t want to injure yourself on your first visit and ruin all your good intentions!</p>
                        </div>
                        <img class="img-responsive" src="{{ asset('front/stayfit/images/resource/image-14.jpg') }}" alt="" title="">

                    </div>

                </div>

                <!--Featured Courses-->
                <div class="col-md-5 col-sm-6 col-xs-12">
                    <div class="featured-courses">

                        <div class="sec-title">
                            <h3>OUR FEATURED</h3>
                            <h2>COURSES &amp; TRAININGS</h2>
                        </div>

                        <div class="post wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.5s" data-wow-offset="0">
                            <h3>Cardio Spinning &amp; Cycling</h3>
                            <div class="desc">Every Monday 7 PM / 2 hours  / StayFit Cycling Room</div>
                            <div class="info">
                                Johnny Galecki - Fitness Coach <span class="icon flaticon-cycling"></span>
                                <a href="#" class="join">Join</a>
                            </div>
                        </div>

                        <div class="post wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.5s" data-wow-offset="0">
                            <h3>Running Wild for Freaks</h3>
                            <div class="desc">Every Tuesday 6 PM / 2 hours  / Outdoor</div>
                            <div class="info">
                                Marvin Jackson - Cardio Coach <span class="icon flaticon-sprint"></span>
                                <a href="#" class="join">Join</a>
                            </div>
                        </div>

                        <div class="post wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.5s" data-wow-offset="0">
                            <h3>Body Challenge </h3>
                            <div class="desc">Every Monday and Friday 6 PM / 1 hour  / Fitness Room</div>
                            <div class="info">
                                Marvin Jackson - Cardio Coach<span class="icon flaticon-sprint"></span>
                                <a href="#" class="join">Join</a>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </section>

    <!--Team-->
    <section class="our-team">
        <div class="auto-container">
            <div class="sec-title">
                <h3>OUR TRAINERS</h3>
                <h2>MEET OUR PERSONAL TRAINERS</h2>
            </div>

            <div class="row clearfix">

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <article class="member wow fadeInLeft" data-wow-delay="0s" data-wow-duration="1.5s" data-wow-offset="0">
                        <figure class="image">
                            <img src="images/resource/team-image-1.jpg" alt="" title="">
                            <span class="curve"></span>
                        </figure>
                        <div class="content">
                            <ul class="info">
                                <li><strong>Aaron Willson</strong> - Fitness Coach</li>
                                <li><strong>Age:</strong> 26 Years old</li>
                                <li><strong>Gym:</strong> New York City</li>
                            </ul>

                            <ul class="social-links">
                                <li><a class="fa fa-facebook-f" href="#"></a></li>
                                <li><a class="fa fa-twitter" href="#"></a></li>
                                <li><a class="fa fa-google-plus" href="#"></a></li>
                                <li><a class="fa fa-instagram" href="#"></a></li>
                                <li><a class="fa fa-envelope" href="mailto:me@example.com"></a></li>
                            </ul>
                        </div>
                    </article>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <article class="member wow fadeInUp" data-wow-delay="0s" data-wow-duration="1.5s" data-wow-offset="0">
                        <figure class="image">
                            <img src="images/resource/team-image-2.jpg" alt="" title="">
                            <span class="curve"></span>
                        </figure>
                        <div class="content">
                            <ul class="info">
                                <li><strong>Jenna Jameson</strong> - Health Coach </li>
                                <li><strong>Age:</strong> 24 Years old</li>
                                <li><strong>Gym:</strong> New York City</li>
                            </ul>

                            <ul class="social-links">
                                <li><a class="fa fa-facebook-f" href="#"></a></li>
                                <li><a class="fa fa-twitter" href="#"></a></li>
                                <li><a class="fa fa-google-plus" href="#"></a></li>
                                <li><a class="fa fa-instagram" href="#"></a></li>
                                <li><a class="fa fa-envelope" href="mailto:me@example.com"></a></li>
                            </ul>
                        </div>
                    </article>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <article class="member wow fadeInUp" data-wow-delay="0s" data-wow-duration="1.5s" data-wow-offset="0">
                        <figure class="image">
                            <img src="{{ asset('front/stayfit/images/resource/team-image-3.jpg') }}" alt="" title="">
                            <span class="curve"></span>
                        </figure>
                        <div class="content">
                            <ul class="info">
                                <li><strong>Thomas Irvin</strong> - Fitness Coach     </li>
                                <li><strong>Age:</strong> 25 Years old</li>
                                <li><strong>Gym:</strong> San Francisco</li>
                            </ul>

                            <ul class="social-links">
                                <li><a class="fa fa-facebook-f" href="#"></a></li>
                                <li><a class="fa fa-twitter" href="#"></a></li>
                                <li><a class="fa fa-google-plus" href="#"></a></li>
                                <li><a class="fa fa-instagram" href="#"></a></li>
                                <li><a class="fa fa-envelope" href="mailto:me@example.com"></a></li>
                            </ul>
                        </div>
                    </article>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <article class="member wow fadeInRight" data-wow-delay="0s" data-wow-duration="1.5s" data-wow-offset="0">
                        <figure class="image">
                            <img src="{{ asset('front/stayfit/images/resource/team-image-4.jpg') }}" alt="" title="">
                            <span class="curve"></span>
                        </figure>
                        <div class="content">
                            <ul class="info">
                                <li><strong>Vanessa Tomson</strong> - Cardio Coach     </li>
                                <li><strong>Age:</strong> 29 Years old</li>
                                <li><strong>Gym:</strong> Washington</li>
                            </ul>

                            <ul class="social-links">
                                <li><a class="fa fa-facebook-f" href="#"></a></li>
                                <li><a class="fa fa-twitter" href="#"></a></li>
                                <li><a class="fa fa-google-plus" href="#"></a></li>
                                <li><a class="fa fa-instagram" href="#"></a></li>
                                <li><a class="fa fa-envelope" href="mailto:me@example.com"></a></li>
                            </ul>
                        </div>
                    </article>
                </div>

            </div>
        </div>
    </section>
    <!--Curved Section / Training Requirements-->
    <section class="curved-section">
        <div class="auto-container clearfix">

            <div class="content train-req">
                <div class="sec-title">
                    <h3>OUR TRAINING REQUIREMENTS</h3>
                    <h2>How to become successful</h2>
                </div>
                <div class="outer">
                    <div class="block blue">
                        <p>MOTIVATION</p>
                        <div class="bar-upper"><div class="bar" style="width:87%;"><span class="req-text">87%</span></div></div>

                    </div>
                    <div class="block green">
                        <p>TRAINING</p>
                        <div class="bar-upper"><div class="bar" style="width:44%;"><span class="req-text">44%</span></div></div>

                    </div>
                    <div class="block orange">
                        <p>CARDIO</p>
                        <div class="bar-upper"><div class="bar" style="width:76%;"><span class="req-text">76%</span></div></div>

                    </div>
                    <div class="block pink">
                        <p>HEALTH FOOD</p>
                        <div class="bar-upper"><div class="bar" style="width:81%;"><span class="req-text">81%</span></div></div>

                    </div>
                </div>
            </div>

            <figure class="image" style="background-image:url({{ asset('front/stayfit/images/resource/image-15.jpg') }});"></figure>
        </div>
    </section>


    <!--Tweets Scroller-->
    <section class="tweets-scroller">

        <!--Tweets-->
        <div class="tweets-slider-container">
            <ul class="tweets-slider">
                <li class="slide-item">
                    <span class="icon fa fa-twitter"></span>
                    <div class="text">"Rob was told for health reasons that he needed to lose 5 stone. He started swimming 3 times a week, when he felt ready, started going to Boxercise."</div>
                    <span class="tweet-author">Jackson Martinez via twitter</span>
                </li>
                <li class="slide-item">
                    <span class="icon fa fa-twitter"></span>
                    <div class="text">"Rob was told for health reasons that he needed to lose 5 stone. He started swimming 3 times a week and then, when he felt ready, started going to Boxercise."</div>
                    <span class="tweet-author">Julia Martinez via twitter</span>
                </li>
                <li class="slide-item">
                    <span class="icon fa fa-twitter"></span>
                    <div class="text">"Rob was told for health reasons that he needed to lose 5 stone. He started swimming 3 times a week and then, when he started going to Boxercise."</div>
                    <span class="tweet-author">Ruby Kartz via twitter</span>
                </li>
            </ul>
        </div>

        <!--Image Scroller-->
        <div class="image-scroller-container">
            <ul class="image-scroller">
                <li class="slide-item"><span class="image" style="background-image:url({{ asset('front/stayfit/images/resource/scroller-image-4.png') }});"></span></li>
                <li class="slide-item"><span class="image" style="background-image:url({{ asset('front/stayfit/images/resource/scroller-image-5.png') }});"></span></li>
                <li class="slide-item"><span class="image" style="background-image:url({{ asset('front/stayfit/images/resource/scroller-image-6.png') }});"></span></li>
            </ul>
        </div>

    </section>

    <!--Centtered Text-->
    <section class="centered-text">
        <div class="auto-container">
            <div class="sec-title wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s" data-wow-offset="0">
                <h3>GET A MEMBER OF OUR COMMUNITY</h3>
                <h2>YOU CAN START TODAY IF YOU WANT IT</h2>
            </div>
            <div class="sec-text">
                <p>We are an independent gym that is committed to working with you to gain the results you want. Whether your aim is to loose weight, tone up, build bulk or gain weight <br>we can put together a gym programme or recommend the right classes for you to attend in our studios.</p>
                <br>
                <a href="#" class="light-btn wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="1.5s" data-wow-offset="0">SIGN UP NOW</a> &ensp; <a href="#" class="dark-btn wow fadeInRight" data-wow-delay="0.5s" data-wow-duration="1.5s" data-wow-offset="0">CHECK COURSES</a>
            </div>
        </div>
    </section>

    <!--Client Logos-->
    <section class="client-logos">
        <div class="title">
            <h2>GYMS &amp; STUDIOS<br><span class="small-text">FRIENDS AND PARTNERS</span></h2>
        </div>
        <div class="logo-scroller">
            <ul class="slider">
                <li class="slide-item"><a href="#"><img src="{{ asset('front/stayfit/images/clients/1.jpg') }}" alt=""></a></li>
                <li class="slide-item"><a href="#"><img src="{{ asset('front/stayfit/images/clients/2.jpg') }}" alt=""></a></li>
                <li class="slide-item"><a href="#"><img src="{{ asset('front/stayfit/images/clients/3.jpg') }}" alt=""></a></li>
                <li class="slide-item"><a href="#"><img src="{{ asset('front/stayfit/images/clients/4.jpg') }}" alt=""></a></li>
                <li class="slide-item"><a href="#"><img src="{{ asset('front/stayfit/images/clients/1.jpg') }}" alt=""></a></li>
                <li class="slide-item"><a href="#"><img src="{{ asset('front/stayfit/images/clients/2.jpg') }}" alt=""></a></li>
                <li class="slide-item"><a href="#"><img src="{{ asset('front/stayfit/images/clients/3.jpg') }}" alt=""></a></li>
                <li class="slide-item"><a href="#"><img src="{{ asset('front/stayfit/images/clients/4.jpg') }}" alt=""></a></li>
            </ul>
        </div>
    </section>
@endsection
