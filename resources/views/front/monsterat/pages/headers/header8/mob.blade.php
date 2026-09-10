<header class="header mob-header cart-true nz-clearfix">
    <div class="mob-header-top nz-clearfix">
        <div class="container">
            <div class="logo logo-mob">
                <a href="{{ route('monsterat-index','monsterat') }}" title="Montserrat">
                    <img id="img_c475_0" src="{{ asset('front/monsterat/upload/logo_black%402.png') }}" alt="Montserrat">
                </a>
            </div>
            <span class="mob-menu-toggle"></span>
            <span class="mob-sidebar-toggle"></span>
        </div>
    </div>
    <div class="mob-header-content nz-clearfix">
        <div class="container">
            <nav class="mob-menu nz-clearfix">
                <ul  class="menu">
                    <li class="menu-item current-menu-item current_page_item menu-item-home menu-item-has-children" data-mm="false" data-mmc="2"><a href="javascript:void(0)"><span class="mi"></span><span class="txt">Home</span><span class="di icon-arrow-right9"></span></a>
                        <ul class="sub-menu">
                            @include('front.monsterat.pages.headers.links.home_links')
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children megamenu2-1" data-mm="true" data-mmc="4"><a href="javascript:void(0)"><span class="mi"></span><span class="txt">Headers</span><span class="di icon-arrow-right9"></span></a>
                        <ul class="sub-menu">
                            @include('front.monsterat.pages.headers.links.headers_mob_links')
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children" data-mm="false" data-mmc="2"><a href="javascript:void(0)"><span class="mi"></span><span class="txt">Pages</span><span class="di icon-arrow-right9"></span></a>
                        <ul class="sub-menu">
                            @include('front.monsterat.pages.headers.links.pages_mob_links')
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children" data-mm="false" data-mmc="2"><a href="javascript:void(0)"><span class="mi"></span><span class="txt">Blog</span><span class="di icon-arrow-right9"></span></a>
                        <ul class="sub-menu">
                            @include('front.monsterat.pages.headers.links.blog_links')
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children" data-mm="false" data-mmc="2"><a href="javascript:void(0)"><span class="mi"></span><span class="txt">Works</span><span class="di icon-arrow-right9"></span></a>
                        <ul class="sub-menu">
                            @include('front.monsterat.pages.headers.links.works_links')
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children" data-mm="false" data-mmc="4"><a href="javascript:void(0)"><span class="mi"></span><span class="txt">Shop</span><span class="di icon-arrow-right9"></span></a>
                        <ul class="sub-menu">
                            @include('front.monsterat.pages.headers.links.shop_links')
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="search nz-clearfix">
                <form action="#" method="get">
                    <fieldset>
                        <input type="text" name="s" placeholder="Search for..." value="Search for..." />
                        <input type="submit"  value="Search" />
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</header>
