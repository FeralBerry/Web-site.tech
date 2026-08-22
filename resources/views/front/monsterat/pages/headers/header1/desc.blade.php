<header class="header desk version1 page-title-section-version1 one-page-side stuck-true stuck-boxed-false top-false full-width-true sl-true search-true cart-true sidebar-toggle-true iversion-light effect-fill hover-effect-fill megamenu-hover-effect-underline subeffect-ghost fixed-true fiversion-dark wiversion-light">

    <div class="header-content">

        <div class="header-body">
            <div class="container nz-clearfix">

                <div class="logo logo-desk">
                    <a href="{{ route('monsterat-index') }}" title="Montserrat">
                        <img class="normal-logo" id="img_dca7_1" src="{{ asset('front/monsterat/upload/logo%402.png') }}" alt="Montserrat">
                        <img class="fixed-logo" id="img_dca7_2" src="{{ asset('front/monsterat/upload/logo_black%402.png') }}" alt="Montserrat">
                    </a>
                </div>

                <div class="site-sidebar-toggle"></div>

                <div class="search-toggle-wrap">
                    <div class="search-toggle"></div>
                    <div class="search">
                        <form action="#" method="get">
                            <fieldset>
                                <input type="text" name="s" placeholder="Search for..." value="Search for..." />
                                <input type="submit"  value="Search" />
                            </fieldset>
                        </form>
                    </div>
                </div>


                <nav class="header-menu desk-menu nz-clearfix">
                    <ul  class="menu">
                        <li class="menu-item current-menu-item current_page_item menu-item-home menu-item-has-children" data-mm="false" data-mmc="2"><a href="javascript:void(0)"><span class="mi"></span><span class="txt">Home</span><span class="di icon-arrow-right9"></span></a>
                            <ul class="sub-menu">
                                @include('front.monsterat.pages.headers.links.home_links')
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children megamenu2-1" data-mm="true" data-mmc="4"><a href="javascript:void(0)"><span class="mi"></span><span class="txt">Headers</span><span class="di icon-arrow-right9"></span></a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-has-children" data-mm="false" data-mmc="2"><a href="javascript:void(0)"><span class="mi"></span><span class="txt">Headers</span><span class="di icon-arrow-right9"></span></a>
                                    <ul class="sub-menu">
                                        @include('front.monsterat.pages.headers.links.headers_desc_links1')
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children" data-mm="false" data-mmc="2"><a href="javascript:void(0)"><span class="mi"></span><span class="txt">Headers</span><span class="di icon-arrow-right9"></span></a>
                                    <ul class="sub-menu">
                                        @include('front.monsterat.pages.headers.links.headers_desc_links2')
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children" data-mm="false" data-mmc="2"><a href="javascript:void(0)"><span class="mi"></span><span class="txt">Pages</span><span class="di icon-arrow-right9"></span></a>
                            <ul class="sub-menu">
                                @include('front.monsterat.pages.headers.links.pages_desc_links')
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
            </div>
        </div>

    </div>
</header>
