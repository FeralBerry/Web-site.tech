<header class="header-area header-wrapper">
    <div class="header-top-bar black-bg clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="login-register-area">
                        <ul>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Register</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 hidden-xs">
                    <div class="social-search-area text-center">
                        <div class="social-icon socile-icon-style-2">
                            <ul>
                                <li><a href="#" title="facebook"><i class="fa fa-facebook"></i></a> </li>
                                <li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a> </li>
                                <li> <a href="#" title="dribble"><i class="fa fa-dribbble"></i></a></li>
                                <li> <a href="#" title="behance"><i class="fa fa-behance"></i></a> </li>
                                <li> <a href="#" title="rss"><i class="fa fa-rss"></i></a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="cart-currency-area login-register-area text-right">
                        <ul>
                            <li>
                                <div class="header-currency">
                                    <select>
                                        <option value="1">USD</option>
                                        <option value="2">Pound</option>
                                        <option value="3">Euro</option>
                                        <option value="4">Dinar</option>
                                    </select>
                                </div>
                            </li>
                            <li>
                                <div class="header-cart">
                                    <div class="cart-icon"> <a href="#">Cart<i class="zmdi zmdi-shopping-cart"></i></a> <span>2</span> </div>
                                    <div class="cart-content-wraper">
                                        <div class="cart-single-wraper">
                                            <div class="cart-img">
                                                <a href="#"><img src="{{ asset('front/clothing/images/product/01.jpg') }}" alt=""></a>
                                            </div>
                                            <div class="cart-content">
                                                <div class="cart-name"> <a href="#">Aenean Eu Tristique</a> </div>
                                                <div class="cart-price"> $70.00 </div>
                                                <div class="cart-qty"> Qty: <span>1</span> </div>
                                            </div>
                                            <div class="remove"> <a href="#"><i class="zmdi zmdi-close"></i></a> </div>
                                        </div>
                                        <div class="cart-single-wraper">
                                            <div class="cart-img">
                                                <a href="#"><img src="{{ asset('front/clothing/images/product/02.jpg') }}" alt=""></a>
                                            </div>
                                            <div class="cart-content">
                                                <div class="cart-name"> <a href="#">Aenean Eu Tristique</a> </div>
                                                <div class="cart-price"> $70.00 </div>
                                                <div class="cart-qty"> Qty: <span>1</span> </div>
                                            </div>
                                            <div class="remove"> <a href="#"><i class="zmdi zmdi-close"></i></a> </div>
                                        </div>
                                        <div class="cart-subtotal"> Subtotal: <span>$200.00</span> </div>
                                        <div class="cart-check-btn">
                                            <div class="view-cart"> <a class="btn-def" href="{{ route('clothing-pages',['clothing','cart']) }}">View Cart</a> </div>
                                            <div class="check-btn"> <a class="btn-def" href="{{ route('clothing-pages',['clothing','checkout']) }}">Checkout</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sticky-header"  class="header-middle-area">
        <div class="container">
            <div class="full-width-mega-dropdown">
                <div class="row">
                    <div class="col-md-2 col-sm-2">
                        <div class="logo ptb-20"><a href="{{ route('clothing-index',['clothing']) }}">
                                <img src="{{ asset('front/clothing/images/logo/logo.png') }}" alt="main logo"></a>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-10 hidden-xs">
                        <nav id="primary-menu">
                            <ul class="main-menu">
                                <li class="current"><a class="active" href="{{ route('clothing-index',['clothing']) }}">Home</a>
                                    <ul class="dropdown">
                                        <li><a class="active" href="{{ route('clothing-index',['clothing']) }}">Home One</a></li>
                                        <li><a href="{{ route('clothing-pages',['clothing','index2']) }}">Home Two</a></li>
                                        <li><a href="{{ route('clothing-pages',['clothing','boxed1']) }}">Home Three (Boxed)</a></li>
                                        <li><a href="{{ route('clothing-pages',['clothing','boxed2']) }}">Home Four (Boxed)</a></li>
                                    </ul>
                                </li>
                                <li class="mega-parent pos-rltv"><a href="{{ route('clothing-pages',['clothing','shop']) }}">Man</a>
                                    <div class="mega-menu-area mma-800">
                                        <ul class="single-mega-item">
                                            <li class="menu-title uppercase">Shirts</li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Shirt 01</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Shirt 02</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Shirt 03</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Shirt 04</a></li>
                                        </ul>
                                        <ul class="single-mega-item">
                                            <li class="menu-title uppercase">Pants</li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Pant 01</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Pant 02</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Pant 03</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Pant 04</a></li>
                                        </ul>
                                        <ul class="single-mega-item">
                                            <li class="menu-title uppercase">T-Shirts</li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">T-Shirt 01</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">T-Shirt 02</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">T-Shirt 03</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">T-Shirt 04</a></li>
                                        </ul>
                                        <div class="mega-banner-img">
                                            <a href="{{ route('clothing-pages',['clothing','singleProduct']) }}"><img src="{{ asset('front/clothing/images/banner/banner-fashion-02.jpg') }}" alt=""></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="mega-parent pos-rltv"><a href="{{ route('clothing-pages',['clothing','shop']) }}">Women</a>
                                    <div class="mega-menu-area mma-700">
                                        <ul class="single-mega-item">
                                            <li class="menu-title uppercase">Sharees</li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Sharee 01</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Sharee 02</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Sharee 03</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Sharee 04</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Sharee 05</a></li>
                                        </ul>
                                        <ul class="single-mega-item">
                                            <li class="menu-title uppercase">Lahenga</li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Lahenga 01</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Lahenga 02</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Lahenga 03</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Lahenga 04</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Lahenga 05</a></li>
                                        </ul>
                                        <ul class="single-mega-item">
                                            <li class="menu-title uppercase">Sandels</li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Sandel 01</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Sandel 02</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Sandel 03</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Sandel 04</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Sandel 05</a></li>
                                        </ul>
                                        <div class="mega-banner-img">
                                            <a href="{{ route('clothing-pages',['clothing','singleProduct']) }}"><img src="{{ asset('front/clothing/images/banner/banner-fashion.jpg') }}" alt=""></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="mega-parent"><a href="{{ route('clothing-pages',['clothing','shop']) }}">Shortcut</a>
                                    <div class="mega-menu-area mma-970">
                                        <ul class="single-mega-item">
                                            <li class="menu-title uppercase">Shortcode-01</li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shortcodeBanner']) }}" target="_blank">shortcode-banner</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shortcodeBest']) }}" target="_blank">too-on-sale</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shortcodeBlog']) }}" target="_blank">Short Blog Item</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shortcodeBrand']) }}" target="_blank">Brand Product</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shortcodeBrandSlider']) }}" target="_blank">Brand Slider</a></li>
                                        </ul>
                                        <ul class="single-mega-item">
                                            <li class="menu-title uppercase">Shortcode-02</li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shortcodeBreadcrumb']) }}" target="_blank">Breadcrumb</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shortcodeRelatedProduct']) }}" target="_blank">Related Product</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shortcodeService']) }}" target="_blank">Service</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shortcodeSkill']) }}" target="_blank">Skill</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shortcodeSlider']) }}" target="_blank">Slider</a></li>
                                        </ul>
                                        <ul class="single-mega-item">
                                            <li class="menu-title uppercase">Shortcode-03</li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shortcodeTeam']) }}" target="_blank">Team</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shortcodeTestimonial']) }}" target="_blank">Testimonial</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shortcodeWhyChooseUs']) }}" target="_blank">Why Choose Us</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="mega-parent"><a href="{{ route('clothing-index',['clothing']) }}">Pages</a>
                                    <div class="mega-menu-area mma-970">
                                        <ul class="single-mega-item coloum-4">
                                            <li class="menu-title uppercase">Pages-01</li>
                                            <li><a href="{{ route('clothing-pages',['clothing','aboutUs']) }}" target="_blank">About-us</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','blog']) }}" target="_blank">Blog</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','blogRight']) }}" target="_blank">Blog-Right</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','single-blog']) }}" target="_blank">Single Blog</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','singleBlogRight']) }}" target="_blank">Single Blog Right</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','blogFull']) }}" target="_blank">Blog-Fullwidth</a></li>
                                        </ul>
                                        <ul class="single-mega-item coloum-4">
                                            <li class="menu-title uppercase">pages-02</li>
                                            <li><a href="{{ route('clothing-pages',['clothing','blogFullRight']) }}" target="_blank">Blog Ful Rightl</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','cart']) }}" target="_blank">Cart</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','checkout']) }}" target="_blank">Checkout</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','compare']) }}" target="_blank">Compare</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','completeOrder']) }}" target="_blank">Complete Order</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','contactUs']) }}" target="_blank">Contact US</a></li>
                                        </ul>
                                        <ul class="single-mega-item coloum-4">
                                            <li class="menu-title uppercase">pages-03</li>
                                            <li><a href="{{ route('clothing-pages',['clothing','login']) }}" target="_blank">Login</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','myAccount']) }}" target="_blank">My Account</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shopFullGrid']) }}" target="_blank">Shop Full Grid</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shopFullList']) }}" target="_blank">Shop Full List</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shopListRightSidebar']) }}" target="_blank">Shop List Right</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shopList']) }}" target="_blank">Shop List</a></li>
                                        </ul>
                                        <ul class="single-mega-item coloum-4">
                                            <li class="menu-title uppercase">pages-03</li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shopRightSidebar']) }}" target="_blank">Shop Right</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shop']) }}" target="_blank">Shop</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','singleProduct']) }}" target="_blank">Single Prodcut</a></li>
                                            <li><a href="{{ route('clothing-pages',['clothing','wishlist']) }}" target="_blank">Wishlist</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="{{ route('clothing-pages',['clothing','blog']) }}">BLOG</a></li>
                                <li><a href="{{ route('clothing-pages',['clothing','aboutUs']) }}">ABOUT</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-3 hidden-sm hidden-xs">
                        <div class="search-box global-table">
                            <div class="global-row">
                                <div class="global-cell">
                                    <form action="#">
                                        <div class="input-box">
                                            <input class="single-input" placeholder="Search anything" type="text">
                                            <button class="src-btn"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mobile-menu-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <nav id="dropdown">
                                        <ul>
                                            <li><a href="{{ route('clothing-index',['clothing']) }}">Home</a>
                                                <ul>
                                                    <li><a class="active" href="{{ route('clothing-index',['clothing']) }}">Home One</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','index2']) }}">Home Two</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','boxed1']) }}">Home Three (Boxed)</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','boxed2']) }}">Home Four (Boxed)</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Man</a>
                                                <ul class="single-mega-item">
                                                    <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Shirt 01</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Shirt 02</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Shirt 03</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Shirt 04</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Pant 01</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Pant 02</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Pant 03</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Pant 04</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">T-Shirt 01</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">T-Shirt 02</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">T-Shirt 03</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">T-Shirt 04</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Shop</a>
                                                <ul class="single-mega-item">
                                                    <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Sharee 01</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Sharee 02</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Sharee 03</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Sharee 04</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Sharee 05</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Lahenga 01</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Lahenga 02</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Lahenga 03</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Lahenga 04</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Lahenga 05</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Sandel 01</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Sandel 02</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Sandel 03</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Sandel 04</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shop']) }}">Sandel 05</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Shortcode</a>
                                                <ul class="single-mega-item">
                                                    <li><a href="{{ route('clothing-pages',['clothing','shortcodeBanner']) }}" target="_blank">shortcode-banner</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shortcodeBest']) }}" target="_blank">too-on-sale</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shortcodeBlog']) }}" target="_blank">Short Blog Item</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shortcodeBrand']) }}" target="_blank">Brand Product</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shortcodeBrandSlider']) }}" target="_blank">Brand Slider</a></li>

                                                    <li><a href="{{ route('clothing-pages',['clothing','shortcodeBreadcrumb']) }}" target="_blank">Breadcrumb</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shortcodeRelatedProduct']) }}" target="_blank">Related Product</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shortcodeService']) }}" target="_blank">Service</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shortcodeSkill']) }}" target="_blank">Skill</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shortcodeSlider']) }}" target="_blank">Slider</a></li>

                                                    <li><a href="{{ route('clothing-pages',['clothing','shortcodeTeam']) }}" target="_blank">Team</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shortcodeTestimonial']) }}" target="_blank">Testimonial</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shortcodeWhyChooseUs']) }}" target="_blank">Why Choose Us</a></li>
                                                </ul>
                                            </li>
                                            <li> <a href="#">Pages</a>
                                                <ul class="single-mega-item coloum-4">
                                                    <li><a href="{{ route('clothing-pages',['clothing','aboutUs']) }}" target="_blank">About-us</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','blog']) }}" target="_blank">Blog</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','blogRight']) }}" target="_blank">Blog-Right</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','single-blog']) }}" target="_blank">Single Blog</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','singleBlogRight']) }}" target="_blank">Single Blog Right</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','blogFull']) }}" target="_blank">Blog-Fullwidth</a></li>
                                                    <li class="menu-title uppercase">pages-02</li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','blogFullRight']) }}" target="_blank">Blog Ful Rightl</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','cart']) }}" target="_blank">Cart</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','checkout']) }}" target="_blank">Checkout</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','compare']) }}" target="_blank">Compare</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','completeOrder']) }}" target="_blank">Complete Order</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','contactUs']) }}" target="_blank">Contact US</a></li>
                                                    <li class="menu-title uppercase">pages-03</li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','login']) }}" target="_blank">Login</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','myAccount']) }}" target="_blank">My Account</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shopFullGrid']) }}" target="_blank">Shop Full Grid</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shopFullList']) }}" target="_blank">Shop Full List</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shopListRightSidebar']) }}" target="_blank">Shop List Right</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shopList']) }}" target="_blank">Shop List</a></li>
                                                    <li class="menu-title uppercase">pages-03</li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shopRightSidebar']) }}" target="_blank">Shop Right</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','shop']) }}" target="_blank">Shop</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','singleProduct']) }}" target="_blank">Single Prodcut</a></li>
                                                    <li><a href="{{ route('clothing-pages',['clothing','wishlist']) }}" target="_blank">Wishlist</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('clothing-pages',['clothing','aboutUs']) }}">about</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
