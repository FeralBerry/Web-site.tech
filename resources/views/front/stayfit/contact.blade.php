@extends('front.stayfit.layout.layout')
@section('content')
        <section class="page-banner" style="background-image:url({{ asset('front/stayfit/images/background/page-banner-bg.jpg') }};)">
            <div class="auto-container">
                <h1>Contact Us</h1>
            </div>
        </section>
        <section class="contact-us clearfix">
            <div class="inner">
                <div class="contact-area">
                    <div class="contact-title">
                        <h3><span class="space"></span>GET IN TOUCH</h3>
                        <h2><span class="space"></span> Don´t be shy and write <br>us a message!</h2>
                    </div>
                    <div class="contact-form">
                        <form id="contact-form" method="post" >
                            <div class="fields clearfix">
                                <div class="form-group col-md-6 col-sm-12 col-xs-12 text-field">
                                    <input type="text" name="name" value="" placeholder="Enter Your Name">
                                </div>

                                <div class="form-group col-md-6 col-sm-12 col-xs-12 text-field">
                                    <input type="email" name="email" value="" placeholder="Enter Your Email">
                                </div>

                                <div class="form-group col-md-6 col-sm-12 col-xs-12 text-field">
                                    <input type="text" name="phone" value="" placeholder="Enter Your Phone Number">
                                </div>

                                <div class="form-group col-md-6 col-sm-12 col-xs-12 text-field">
                                    <input type="text" name="subject" value="" placeholder="Subject">
                                </div>
                            </div>

                            <div class="message-field">
                                <textarea name="message" placeholder="Type Your Message Here"></textarea>
                            </div>

                            <div class="text-right col-md-12"><button type="submit"><span class="fa fa-angle-right"></span> Send Message</button></div>
                        </form>
                    </div>
                </div>

            </div>
        </section>
@endsection
