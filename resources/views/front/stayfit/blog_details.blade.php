@extends('front.stayfit.layout.layout')
@section('content')
    <!--Page Banner -->
    <section class="page-banner" style="background-image:url({{ asset('front/stayfit/images/background/page-banner-bg.jpg') }});">
        <div class="auto-container">
            <h1>Blog Detail</h1>
        </div>
    </section>

    <!-- Blog Section Begins -->
    <section id="blog" class="blog single section">
        <div class="auto-container">
            <div class="row">
                <!-- Blog Left Side Begins -->
                <div class="col-md-8">
                    <!-- Post -->
                    <div class="post-item">
                        <!-- Post Title -->
                        <h2 class="wow fadeInLeft">Do Right Moves</h2>
                        <div class="post wow fadeInUp">
                            <!-- Image -->
                            <img class="img-responsive" src="{{ asset('front/stayfit/images/blog/1.jpg') }}" alt="" />
                            <div class="post-content wow fadeInUp">
                                <!-- Meta -->
                                <div class="posted-date">July 19, 2014   /   <span>by</span> <a href="#">John</a>   /   <a href="#">12 Comments</a></div>
                                <!-- Text -->
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It has survived not only five centuries. </p>
                                <p><i>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</i></p>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                                <!-- Heading -->
                                <h5>Managing Your Credit Cards</h5>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                                <div class="share-btn">
                                    <a href="#" class="btn fb-bg">Share on <b>Facebook</b></a>
                                    <a href="#" class="btn twitter-bg">Share on <b>Twitter</b></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Post -->

                    <!-- Author Section -->
                    <div class="author wow fadeInUp">
                        <!-- Image -->
                        <img src="{{ asset('front/stayfit/images/blog/author/1.jpg') }}" alt="" />
                        <div class="author-comment">
                            <h5>John Michaels</h5>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure.</p>
                        </div>
                        <div class="clear"></div>
                    </div><!-- Author Section Ends-->

                    <!-- Comment Section -->
                    <div class="post-comments">
                        <!-- Heading -->
                        <div class="title-head wow fadeInUp">3 comments</div>
                        <ul class="comment-list">
                            <!-- Item -->
                            <li class="wow fadeInUp">
                                <!-- Image -->
                                <img src="{{ asset('front/stayfit/images/blog/comments/1.jpg') }}" alt="" />
                                <!-- Comments -->
                                <div class="comment-details">
                                    <div class="comments">
                                        <!-- Comments Meta-->
                                        <div class="comment-meta">
                                            <!-- Author Name-->
                                            <div class="user-name">
                                                Jenna
                                            </div>
                                            <div class="posted-date">
                                                July 19, 2014  <span> 5:50 AM</span>
                                            </div>
                                        </div>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure.	</p>
                                    </div>
                                    <a href="#" class="btn reply">reply</a>
                                </div>
                            </li>
                            <!-- Item -->
                            <li class="wow fadeInUp">
                                <!-- Image -->
                                <img src="{{ asset('front/stayfit/images/blog/comments/2.jpg') }}" alt="" />
                                <!-- Comments -->
                                <div class="comment-details">
                                    <div class="comments">
                                        <!-- Comments Meta-->
                                        <div class="comment-meta">
                                            <!-- Author Name-->
                                            <div class="user-name">
                                                July
                                            </div>
                                            <div class="posted-date">
                                                July 19, 2014  <span> 5:50 AM</span>
                                            </div>
                                        </div>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure.	</p>
                                    </div>
                                    <a href="#" class="btn reply">reply</a>
                                </div>
                            </li>
                            <!-- Item -->
                            <li class="wow fadeInUp">
                                <!-- Image -->
                                <img src="{{ asset('front/stayfit/images/blog/comments/3.jpg') }}" alt="" />
                                <!-- Comments -->
                                <div class="comment-details">
                                    <div class="comments">
                                        <!-- Comments Meta-->
                                        <div class="comment-meta">
                                            <!-- Author Name-->
                                            <div class="user-name">
                                                Marry
                                            </div>
                                            <div class="posted-date">
                                                July 19, 2014  <span> 5:50 AM</span>
                                            </div>
                                        </div>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure.	</p>
                                    </div>
                                    <a href="#" class="btn reply">reply</a>
                                </div>
                            </li>
                        </ul>
                    </div>


                    <!-- Add Your Comments -->
                    <div class="comments-form wow fadeInUp">
                        <!-- Heading -->
                        <div class="title-head">add your comment</div>
                        <!-- Form -->
                        <div class="row form">
                            <div class="col-sm-12">
                                <form class="comment-area">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Your Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Your email address">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="url" placeholder="Your URL">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="comment" placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="text-right">
                                        <button class="full-btn">Add Comment </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div><!-- Blog Left Side Ends -->


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

            </div>

        </div>
    </section><!-- Our Blog Section Ends -->
@endsection
