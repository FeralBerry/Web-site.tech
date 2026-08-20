@extends('front.bovile.layout.layout')
@section('content')
    <main class="site-main page-spacing">
        <div class="page-banner faq-banner container-fluid no-padding">
            <div class="page-banner-content">
                <div class="container">
                    <h3>Recent Updates</h3>
                    <p>You wanna be where you can see our troubles are all the same you wanna be where everybody knows Your name days are all share them with me oh baby are the voyages of the Starship Enterprise</p>
                </div>
            </div>
            <div class="banner-content container-fluid no-padding">
                <div class="container">
                    <h4 class="pull-left">Blog Posts</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Home</a></li>
                        <li class="active">Latest News</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- Blog Section -->
        <div id="blog-section" class="blog-list container-fluid no-padding">
            <div class="section-padding"></div>
            <!-- Container -->
            <div class="container">
                <!-- Row -->
                <div class="row">
                    <!-- Content Area -->
                    <div class="content-area content-area75 col-md-9 col-sm-8">
                        <article class="type-post blog-onecolumn format-image">
                            <div class="entry-cover">
                                <a href="{{ route('bovile-blog-post') }}" title="Cover"><img src="{{ asset('front/bovile/images/blog/blog1.jpg') }}" alt="blog1"/></a>
                                <div class="entry-meta">
                                    <div class="post-date">
                                        <p><span>20</span>December 2015</p>
                                    </div>
                                    <div class="post-meta">
                                        <div class="post-like"><a href="#" title="Like"><i class="fa fa-heart-o"></i>10 Like</a></div>
                                        <div class="post-comments"><a href="#" title="Comments"><i class="fa fa-comment-o"></i>20 Comments</a></div>
                                        <div class="byline"><a href="#" title="Admin"><i class="fa fa-user"></i>By Admin</a></div>
                                        <div class="social-share">
                                            <i class="fa fa-share-alt"></i>
                                            <ul>
                                                <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" title="Google-plus"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-title">
                                <h3><a href="{{ route('bovile-blog-post') }}" title="Blog Title">The ship set ground on the shore of this uncharted desert isle with Gilligan the Skipper of the fearless crew the Minnow would be lost</a></h3>
                            </div>
                            <div class="entry-content">
                                <p>Take a step that is new. We've a loveable spa that needs your face threes company too. I have always wanted to have a like you The mate was a mighty sailin' man the Skipper brave and sure. Five passengers set sail that day for a three hour tour a three hour tour. Said Californ'y is the place you ought to be So they loaded up the truck and moved to Beverly. Hills that is. Swimmin' pools movie stars.</p>
                            </div>
                        </article>
                        <article class="type-post blog-onecolumn format-image">
                            <div class="entry-cover">
                                <a href="{{ route('bovile-blog-post') }}" title="Cover"><img src="{{ asset('front/bovile/images/blog/blog2.jpg') }}" alt="blog1"/></a>
                                <div class="entry-meta">
                                    <div class="post-date">
                                        <p><span>12</span>November 2015</p>
                                    </div>
                                    <div class="post-meta">
                                        <div class="post-like"><a href="#" title="Like"><i class="fa fa-heart-o"></i>18 Like</a></div>
                                        <div class="post-comments"><a href="#" title="Comments"><i class="fa fa-comment-o"></i>24 Comments</a></div>
                                        <div class="byline"><a href="#" title="Admin"><i class="fa fa-user"></i>By Admin</a></div>
                                        <div class="social-share">
                                            <i class="fa fa-share-alt"></i>
                                            <ul>
                                                <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" title="Google-plus"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-title">
                                <h3><a href="{{ route('bovile-blog-post') }}" title="Blog Title">Its a neighborly day in this beautywood a neighborly day for a beauty On your mark get set and go now make our dream come true to the best</a></h3>
                            </div>
                            <div class="entry-content">
                                <p>Their house is a museum where people come to see &#180;em. They really are a scream the Addams Family. Just two good ol' boys Wouldn't change if they could. Fightin' the system like a true modern day Robin Hood! Well we're movin' on up to the east side. To a deluxe apartment in the sky? Come and dance on our floor. Till the one day when the lady met this fellow and they knew it was much more than a hunch.</p>
                            </div>
                        </article>
                        <article class="type-post blog-onecolumn format-image">
                            <div class="entry-cover">
                                <a href="{{ route('bovile-blog-post') }}" title="Cover"><img src="{{ asset('front/bovile/images/blog/blog3.jpg') }}" alt="blog1"/></a>
                                <div class="entry-meta">
                                    <div class="post-date">
                                        <p><span>07</span>Octomber 2015</p>
                                    </div>
                                    <div class="post-meta">
                                        <div class="post-like"><a href="#" title="Like"><i class="fa fa-heart-o"></i>21 Like</a></div>
                                        <div class="post-comments"><a href="#" title="Comments"><i class="fa fa-comment-o"></i>32 Comments</a></div>
                                        <div class="byline"><a href="#" title="Admin"><i class="fa fa-user"></i>By Admin</a></div>
                                        <div class="social-share">
                                            <i class="fa fa-share-alt"></i>
                                            <ul>
                                                <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" title="Google-plus"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-title">
                                <h3><a href="{{ route('bovile-blog-post') }}" title="Blog Title">Today still wanted by the government they survive as soldiers of fortune Believe it or not I'm walking on air on a broomstick you can crawl on</a></h3>
                            </div>
                            <div class="entry-content">
                                <p>Here's the story of a man named Brady who was busy with three boys of his own. Got kind of tired packin' and unpackin' - town to town and up and down the dial. It's time to put on makeup. It's time to dress up right. It's time to raise the curtain on the Muppet Show tonight? The ship set ground on the shore of this uncharted desert isle with Gilligan the Skipper too the millionaire and his wife they survive as soldiers.</p>
                            </div>
                        </article>
                        <article class="type-post blog-onecolumn format-image">
                            <div class="entry-cover">
                                <a href="{{ route('bovile-blog-post') }}" title="Cover"><img src="{{ asset('front/bovile/images/blog/blog4.jpg') }}" alt="blog1"/></a>
                                <div class="entry-meta">
                                    <div class="post-date">
                                        <p><span>14</span>September 2015</p>
                                    </div>
                                    <div class="post-meta">
                                        <div class="post-like"><a href="#" title="Like"><i class="fa fa-heart-o"></i>13 Like</a></div>
                                        <div class="post-comments"><a href="#" title="Comments"><i class="fa fa-comment-o"></i>28 Comments</a></div>
                                        <div class="byline"><a href="#" title="Admin"><i class="fa fa-user"></i>By Admin</a></div>
                                        <div class="social-share">
                                            <i class="fa fa-share-alt"></i>
                                            <ul>
                                                <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" title="Google-plus"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-title">
                                <h3><a href="{{ route('bovile-blog-post') }}" title="Blog Title">If not for the courage of the fearless crew the Minnow would be lost and me were never meant to be the first thing you know old Jeds a million</a></h3>
                            </div>
                            <div class="entry-content">
                                <p>Got a dream and we just know now we're gonna make our dream come true. Their house is a museum where people come to see &#180;em. They really are a scream the Addams Family. Boy the way Glen Miller played. Songs that made the hit parade. Guys like us we had it made. Those were the days. On your mark get set and go now. Got a dream and we just know now we're gonna make our dream come true to this group.</p>
                            </div>
                        </article>
                        <nav class="ow-pagination">
                            <ul class="pagination">
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">Next &raquo;</a></li>
                            </ul>
                        </nav>
                    </div><!-- Content Area /- -->

                    <!-- Widget Area -->
                    <div class="widget-area widget-area22 col-md-3 col-sm-4">
                        <aside class="widget widget-search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search . . .">
                                <span class="input-group-btn">
									<button class="btn btn-search" type="button"><i class="fa fa-search"></i></button>
								</span>
                            </div>
                        </aside>
                        <aside class="widget widget-catagories">
                            <h3 class="widget-title">categories</h3>
                            <ul>
                                <li><a href="#" title="Fishing Camp">Fishing Camp<span>09</span></a></li>
                                <li><a href="#" title="Holiday Adventures">Holiday Adventures<span>10</span></a></li>
                                <li><a href="#" title="Fishing Equipments">Fishing Equipments<span>07</span></a></li>
                                <li><a href="#" title="Inter Club Meets">Inter Club Meets<span>11</span></a></li>
                                <li><a href="#" title="Fishing Techniques">Fishing Techniques<span>13</span></a></li>
                                <li><a href="#" title="Purchase Section">Purchase Section<span>07</span></a></li>
                            </ul>
                        </aside>
                        <aside class="widget widget-latestposts">
                            <h3 class="widget-title">Latest Posts</h3>
                            <div class="latest-content">
                                <a href="{{ route('bovile-blog-post') }}"><img src="{{ asset('front/bovile/images/blog/latest-post1.jpg') }}" alt="blogpost-thumb1"></a>
                                <h3><a href="{{ route('bovile-blog-post') }}" title="Latest Post">Goodness lemur save much alas crud dear</a></h3>
                                <span>09 Oct 2015</span>
                            </div>
                            <div class="latest-content">
                                <a href="{{ route('bovile-blog-post') }}"><img src="{{ asset('front/bovile/images/blog/latest-post2.jpg') }}" alt="blogpost-thumb2"></a>
                                <h3><a href="{{ route('bovile-blog-post') }}" title="Latest Post">However much enor mous merrily jeez</a></h3>
                                <span>22 Nov 2015</span>
                            </div>
                            <div class="latest-content">
                                <a href="{{ route('bovile-blog-post') }}"><img src="{{ asset('front/bovile/images/blog/latest-post3.jpg') }}" alt="blogpost-thumb3"></a>
                                <h3><a href="{{ route('bovile-blog-post') }}" title="Latest Post">Flinched more mam moth this pompously</a></h3>
                                <span>04 Dec 2015</span>
                            </div>
                        </aside>
                        <aside class="widget widget-catagories widget-archives">
                            <h3 class="widget-title">Archives</h3>
                            <ul>
                                <li><a href="#" title="December">December 2015<span>15</span></a></li>
                                <li><a href="#" title="November">November 2015<span>08</span></a></li>
                                <li><a href="#" title="October">October 2015<span>25</span></a></li>
                                <li><a href="#" title="September">September 2015<span>18</span></a></li>
                                <li><a href="#" title="August">August 2015<span>22</span></a></li>
                                <li><a href="#" title="July">July 2015<span>06</span></a></li>
                            </ul>
                        </aside>
                        <aside class="widget widget-tag">
                            <h3 class="widget-title">Populer tags</h3>
                            <div class="tags">
                                <a href="#" title="Fishing">Fishing</a>
                                <a href="#" title="Lure">Lure</a>
                                <a href="#" title="Holiday">Holiday</a>
                                <a href="#" title="Camping">Camping</a>
                                <a href="#" title="Shopping">Shopping</a>
                                <a href="#" title="Clubs">Clubs</a>
                                <a href="#" title="Equipments">Equipments</a>
                                <a href="#" title="Adventures">Adventures</a>
                            </div>
                        </aside>
                    </div><!-- Widget Area /- -->
                </div><!-- Row /- -->
                <div class="section-padding"></div>
            </div><!-- Container /- -->
        </div><!-- Blog Section /- -->

    </main>
@endsection
