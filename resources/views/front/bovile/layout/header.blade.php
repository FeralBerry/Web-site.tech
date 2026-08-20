<header class="header-main container-fluid no-padding">
    <!-- Top Header  -->
    <div class="top-header container-fluid no-padding">
        <!-- Container -->
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-6 social">
                    <ul>
                        <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" title="Linked In"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-6 add-to-cart">
                    <ul>
                        <li><a href="#" title="Add To Cart"><i class="fa fa-shopping-cart"></i><span>1</span></a></li>
                        <li><a href="#" title="My Account"><i class="fa fa-user"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 logo-block">
                    <a href="{{ route('bovile-index') }}" title="Logo"><img src="{{ asset('front/bovile/images/logo.png') }}" alt="Logo" /></a>
                </div>
            </div>
        </div><!-- Container /- -->
    </div><!-- Top Header /- -->

    <!-- Menu Block -->
    <div class="menu-block container-fluid no-pdding">
        <!-- Container -->
        <div class="container">
            <!-- Search Box -->
            <div class="search-box">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search Here . . . ">
                    <span class="input-group-btn">
							<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
						</span>
                </div><!-- /input-group -->
            </div><!-- Search Box /- -->
            <!-- Navigation -->
            <nav class="navbar ow-navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('bovile-index') }}" title="Logo">Bovile</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ route('bovile-index') }}" title="Home">Home</a></li>
                        <li><a href="{{ route('bovile-about') }}" title="About Us">About Us</a></li>
                        <li><a href="{{ route('bovile-services') }}" title="Services">Services</a></li>
                        <li class="dropdown">
                            <a href="#" title="Pages" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <i class="ddl-switch fa fa-angle-down"></i>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('bovile-gallery') }}" title="Gallery">Gallery</a></li>
                                <li><a href="{{ route('bovile-pricing') }}" title="Pricing">Pricing</a></li>
                                <li><a href="{{ route('bovile-faq') }}" title="Faq">FAQ</a></li>
                                <li><a href="{{ route('bovile-404') }}" title="404">404</a></li>
                            </ul>
                        </li>
                        <li><a href="#" title="Our Team">Shop</a></li>
                        <li class="dropdown">
                            <a href="{{ route('bovile-blog') }}" title="Latest News" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Latest News</a>
                            <i class="ddl-switch fa fa-angle-down"></i>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('bovile-blog') }}" title="Blog">Blog</a></li>
                                <li><a href="{{ route('bovile-blog-post') }}" title="Single Post">Single</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('bovile-contact') }}" title="Contact Us">Contact Us</a></li>
                    </ul>
                </div>
            </nav><!-- Navigation -->
        </div><!-- Container /- -->
    </div><!-- Menu Block /- -->
</header><!-- Header /- -->
