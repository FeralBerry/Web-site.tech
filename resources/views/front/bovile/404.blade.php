@extends('front.bovile.layout.layout')
@section('content')
    <main class="site-main page-spacing">
        <!-- Page Banner -->
        <div class="page-banner error-banner container-fluid no-padding">
            <div class="page-banner-content">
                <div class="container">
                    <h3>Page Not Found</h3>
                    <p>You wanna be where you can see our troubles are all the same you wanna be where everybody knows Your name days are all share them with me oh baby are the voyages of the Starship Enterprise</p>
                </div>
            </div>
            <div class="banner-content container-fluid no-padding">
                <div class="container">
                    <h4 class="pull-left">404 - Error</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">404</li>
                    </ol>
                </div>
            </div>
        </div><!-- Page Banner /- -->

        <!-- Error Page -->
        <div class="error-page container-fluid no-padding">
            <div class="container">
                <div class="section-padding"></div>
                <div class="error-code">
                    <img src="{{ asset('front/bovile/images/icon/404-ic.png') }}" alt="404-ic" />
                    <h5>4<span>0</span>4</h5>
                    <h3><span>Sorry,</span> The Page You are searching was not found</h3>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter your search queries. . .">
                        <span class="input-group-btn">
							<button class="btn btn-default" type="button">Search</button>
						</span>
                    </div>
                </div>
                <div class="error-page-content">
                    <p>Today still wanted by the government they survive as soldiers of fortune it is time to put on makeup it is time to dress up right it is time to raise the curtain on the muppet show tonight  the first thing you know old jeds a millionaire</p>
                    <a href="#" class="btn btn-default" title="Go to Home">Go To Home</a>
                    <a href="#" class="btn btn-default bg" title="Previous Page">Previous Page</a>
                </div>
            </div><!-- Container /- -->
            <div class="section-padding"></div>
        </div><!-- Error Page /- -->
    </main>
@endsection
