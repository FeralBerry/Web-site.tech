@extends('front.stayfit.layout.layout')
@section('content')
    <!--Page Banner -->
    <section class="page-banner" style="background-image:url({{ asset('front/stayfit/images/background/page-banner-bg.jpg') }})">
        <div class="auto-container">
            <h1>Our Blog</h1>
        </div>
    </section>
    <!-- Blog -->
    <section id="blog" class="blog section">
        <div class="auto-container">
            <div class="row">
                <!-- Blog Sidebar Begins -->
                <div class="col-md-4">
                    <div class="sidebar">
                        <!-- Search -->
                        <div class="search wow fadeInUp">
                            <form>
                                <input type="search" name="name" placeholder="SEARCH..">
                                <input type="submit" value="submit">
                            </form>
                        </div>
                        <!-- Popular Post -->
                        <div class="blog/popular-post widget wow fadeInUp">
                            <!-- Title -->
                            <h2>most popular posts</h2>
                            <ul class="popular-list">
                                <!-- Item -->
                                <li>
                                    <!-- Post Image -->
                                    <a href="#"><img src="{{ asset('front/stayfit/images/blog/popular-post/1.jpg') }}" alt="" /></a>
                                    <!-- Details -->
                                    <div class="content">
                                        <h3><a href="#">Lorem ipsum blog post</a></h3>
                                        <div class="posted-date">July 19, 2014</div>
                                    </div>
                                </li>
                                <!-- Item -->
                                <li>
                                    <!-- Post Image -->
                                    <a href="#"><img src="{{ asset('front/stayfit/images/blog/popular-post/2.jpg') }}" alt="" /></a>
                                    <!-- Details -->
                                    <div class="content">
                                        <h3><a href="#">Lorem ipsum blog post</a></h3>
                                        <div class="posted-date">July 19, 2014</div>
                                    </div>
                                </li>
                                <!-- Item -->
                                <li>
                                    <!-- Post Image -->
                                    <a href="#"><img src="{{ asset('front/stayfit/images/blog/popular-post/3.jpg') }}" alt="" /></a>
                                    <!-- Details -->
                                    <div class="content">
                                        <h3><a href="#">Lorem ipsum blog post</a></h3>
                                        <div class="posted-date">July 19, 2014</div>
                                    </div>
                                </li>
                                <!-- Item -->
                                <li>
                                    <!-- Post Image -->
                                    <a href="#"><img src="{{ asset('front/stayfit/images/blog/popular-post/4.jpg') }}" alt="" /></a>
                                    <!-- Details -->
                                    <div class="content">
                                        <h3><a href="#">Lorem ipsum blog post</a></h3>
                                        <div class="posted-date">July 19, 2014</div>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- Popular Post Ends-->
                        <!-- Newest Posts -->
                        <div class="blog/popular-post widget wow fadeInUp">
                            <!-- Title -->
                            <h2>Newest posts</h2>
                            <ul class="popular-list">
                                <!-- Item -->
                                <li>
                                    <!-- Post Image -->
                                    <a href="#"><img src="{{ asset('front/stayfit/images/blog/popular-post/1.jpg') }}" alt="" /></a>
                                    <!-- Details -->
                                    <div class="content">
                                        <h3><a href="#">Lorem ipsum blog post</a></h3>
                                        <div class="posted-date">July 19, 2014</div>
                                    </div>
                                </li>
                                <!-- Item -->
                                <li>
                                    <!-- Post Image -->
                                    <a href="#"><img src="{{ asset('front/stayfit/images/blog/popular-post/2.jpg') }}" alt="" /></a>
                                    <!-- Details -->
                                    <div class="content">
                                        <h3><a href="#">Lorem ipsum blog post</a></h3>
                                        <div class="posted-date">July 19, 2014</div>
                                    </div>
                                </li>
                                <!-- Item -->
                                <li>
                                    <!-- Post Image -->
                                    <a href="#"><img src="{{ asset('front/stayfit/images/blog/popular-post/3.jpg') }}" alt="" /></a>
                                    <!-- Details -->
                                    <div class="content">
                                        <h3><a href="#">Lorem ipsum blog post</a></h3>
                                        <div class="posted-date">July 19, 2014</div>
                                    </div>
                                </li>
                                <!-- Item -->
                                <li>
                                    <!-- Post Image -->
                                    <a href="#"><img src="{{ asset('front/stayfit/images/blog/popular-post/4.jpg') }}" alt="" /></a>
                                    <!-- Details -->
                                    <div class="content">
                                        <h3><a href="#">Lorem ipsum blog post</a></h3>
                                        <div class="posted-date">July 19, 2014</div>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- Newest Post Ends-->
                        <!-- Category Posts -->
                        <div class="category widget wow fadeInUp">
                            <!-- Title -->
                            <h2>Categories</h2>
                            <ul class="category-list">
                                <li>
                                    <h3><a href="#">Asset Protection</a></h3>
                                </li>
                                <li>
                                    <h3><a href="#">Bankruptcy</a></h3>
                                </li>
                                <li>
                                    <h3><a href="#">Bankruptcy Alternatives</a></h3>
                                </li>
                                <li>
                                    <h3><a href="#">Clients</a></h3>
                                </li>
                                <li>
                                    <h3><a href="#">Credit Cards</a></h3>
                                </li>
                                <li>
                                    <h3><a href="#">Pilates</a></h3>
                                </li>
                                <li>
                                    <h3><a href="#">Running</a></h3>
                                </li>
                                <li>
                                    <h3><a href="#">Estate Planning</a></h3>
                                </li>
                            </ul>
                        </div><!-- Category Ends-->
                    </div>
                </div><!-- Blog Sidebar Ends -->
                <!-- Blog Left Side Begins -->
                <div class="col-md-8">
                    <!-- Post -->
                    <div class="post-item wow" data-animation="fadeInUp" data-animation-delay="300">
                        <!-- Post Title -->
                        <h2 class="wow fadeInUp"><a href="{{ route('stayfit-blog-details') }}">Do your Right Moves</a></h2>
                        <div class="post wow fadeInUp">
                            <!-- Image -->
                            <a href="{{ route('stayfit-blog-details') }}"><img class="img-responsive" src="{{ asset('front/stayfit/images/blog/1.jpg') }}" alt="blog" /></a>
                            <div class="post-content">
                                <!-- Text -->
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It has survived not only five centuries. </p>
                                <!-- Meta -->
                                <div class="posted-date">July 19, 2014   /   <span>by</span> <a href="#">John</a>   /   <a href="#">12 Comments</a></div>
                            </div>
                        </div>
                    </div><!-- End Post -->
                    <!-- Post -->
                    <div class="post-item wow" data-animation="fadeInUp"  data-animation-delay="300">
                        <!-- Post Title -->
                        <h2 class="wow fadeInUp"><a href="#">How to lose fat fast</a></h2>
                        <div class="post wow fadeInUp">
                            <!-- Image -->
                            <a href="{{ route('stayfit-blog-details') }}"><img class="img-responsive" src="{{ asset('front/stayfit/images/blog/2.jpg') }}" alt="blog" /></a>
                            <div class="post-content">
                                <!-- Text -->
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It has survived not only five centuries. </p>
                                <!-- Meta -->
                                <div class="posted-date">July 19, 2014   /   <span>by</span> <a href="#">John</a>   /   <a href="#">12 Comments</a></div>
                            </div>
                        </div>
                    </div><!-- End Post -->
                    <!-- Post -->
                    <div class="post-item wow" data-animation="fadeInUp" data-animation-delay="300">
                        <!-- Post Title -->
                        <h2 class="wow fadeInUp"><a href="#">Yoga makes your body fit</a></h2>
                        <div class="post wow fadeInUp">
                            <!-- Image -->
                            <a href="{{ route('stayfit-blog-details') }}"><img class="img-responsive" src="{{ asset('front/stayfit/images/blog/3.jpg') }}" alt="blog" /></a>
                            <div class="post-content">
                                <!-- Text -->
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It has survived not only five centuries. </p>
                                <!-- Meta -->
                                <div class="posted-date">July 19, 2014   /   <span>by</span> <a href="#">John</a>   /   <a href="#">12 Comments</a></div>
                            </div>
                        </div>
                    </div><!-- End Post -->
                    <!-- Pagination -->
                    <div class="post-nav wow fadeInRight" data-animation="fadeInUp" data-animation-delay="300">
                        <ul class="pagination">
                            <li><a href="#">&laquo;</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="active"><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>	<!-- Pagination Ends-->
                </div><!-- Blog Left Side Ends -->
            </div>
        </div>
    </section>
    <!-- Our Blog Section Ends -->
@endsection
