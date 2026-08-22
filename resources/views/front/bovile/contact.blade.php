@extends('front.bovile.layout.layout')
@section('content')
    <main class="site-main page-spacing">
        <!-- Page Banner -->
        <div class="page-banner contact-banner container-fluid no-padding">
            <div class="page-banner-content">
                <div class="container">
                    <h3>Keep in Touch</h3>
                    <p>You wanna be where you can see our troubles are all the same you wanna be where everybody knows Your name days are all share them with me oh baby are the voyages of the Starship Enterprise</p>
                </div>
            </div>
            <div class="banner-content container-fluid no-padding">
                <div class="container">
                    <h4 class="pull-left">Contact</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ol>
                </div>
            </div>
        </div><!-- Page Banner /- -->
        <!-- Contact Us -->
        <div class="contact-us container-fluid no-padding">
            <!-- Map -->
            <div class="map container-fluid no-padding">
                <div class="map-canvas" id="map-canvas-contact" data-lat="-37.471308" data-lng="144.785153" data-string="<div class='map-content'>
				<p><i><img src='images/icon/location-ic.png' alt='Location' /></i>A12 - Design Street, Omaha, United States</p>
				<p><i><img src='images/icon/phone-ic.png' alt='Phone' /></i><a href='tel:(01)987654321' title='(01)987654321'>(01) 987 654 32 1</a><a href='tel:(01)123456789' title='(01)123456789'>(01) 123 456 78 9</a></p>
				<p><i><img src='images/icon/mail-ic.png' alt='Mail' /></i><a href='mailto:info@company.com' title='info@company.com'>info@company.com</a><a href='mailto:support@company.com' title='support@company.com'>Support@company.com</a></p>
			</div>" data-zoom="12"></div>
            </div><!-- Map /- -->
            <div class="section-padding"></div>
            <div class="container">
                <div class="section-header">
                    <h3>Send Your Message</h3>
                    <p>Our Great Skilled Workers</p>
                </div>
                <form class="contact-form">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" name="contact-name" class="form-control" id="input_name" placeholder="Your Name *" required/>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" name="contact-email" class="form-control" id="input_email" placeholder="Your E-mail *" required/>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="contact-phone" class="form-control" id="input_phone" placeholder="Phone" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="contact-subject" class="form-control" id="input_subject" placeholder="Subject" required/>
                        </div>
                        <div class="form-group col-md-12">
                            <textarea class="form-control" rows="5" name="contact-message" id="textarea_message" placeholder="Message" ></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" title="Send Message"  value="Send Message" id="btn_submit" name="post">
                        </div>
                        <div id="alert-msg" class="alert-msg"></div>
                    </div>
                </form>
            </div><!-- Container /- -->
            <div class="section-padding"></div>
        </div><!-- Contact Us /- -->
    </main>
@endsection
