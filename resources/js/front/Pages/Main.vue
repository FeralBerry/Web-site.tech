<template>
<div>
        <MainSlider/>
       <Advantages/>
        <DevelopmentTechnologies/>
        <ApplicationForDevelopment/>
        <SomeExamples/>
        <StageOfWork/>



    <!-- Latest News -->
    <div class="container-fluid latest-blog latest-blog-section no-padding">
        <div class="section-padding"></div>
        <div class="container">
            <div class="section-header">
                <h3>Latest news from events</h3>
                <span>Recent Updates</span>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <article class="type-post">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="entry-cover">
                                <a href="blogpost-page.html"><img :src="'/front/images/latest-blog1.jpg'" alt="latest-blog" width="267" height="358"/></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="entry-meta">
                                <div class="post-date">
                                    <a href="#" title=""><i class="fa fa-calendar" aria-hidden="true"></i><span>10 Dec, 2015 </span></a>
                                </div>
                                <div class="post-admin">
                                    <i class="fa fa-user" aria-hidden="true"></i><span>by</span><a href="#" title="Admin">Admin</a>
                                </div>
                                <div class="post-like">
                                    <a href="#" title="Likes"><i class="fa fa-heart-o" aria-hidden="true"></i></a><span>03 Likes</span>
                                </div>
                            </div>
                            <div class="entry-title">
                                <a href="blogpost-page.html" title="These men promptly escaped from a maximum security"><h3>These men promptly escaped from a maximum security</h3></a>
                            </div>
                            <div class="entry-content">
                                <p>Flatnin' the hills Someday the mountain might get ‘em but the law never will! Makin their way the only way how.</p>
                            </div>
                            <a href="blogpost-page.html" class="learn-more" title="Learn More">Learn More</a>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <article class="type-post">
                        <div class="col-md-6 col-sm-6 col-xs-6 ">
                            <div class="entry-cover">
                                <a href="blogpost-page.html"><img :src="'/front/images/latest-blog2.jpg'" alt="latest-blog" width="267" height="358"/></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="entry-meta">
                                <div class="post-date">
                                    <a href="#" title=""><i class="fa fa-calendar" aria-hidden="true"></i><span>9 Dec, 2015 </span></a>
                                </div>
                                <div class="post-admin">
                                    <i class="fa fa-user" aria-hidden="true"></i><span>by</span><a href="#" title="Admin">Admin</a>
                                </div>
                                <div class="post-like">
                                    <a href="#" title="Likes"><i class="fa fa-heart-o" aria-hidden="true"></i></a><span>11 Likes</span>
                                </div>
                            </div>
                            <div class="entry-title">
                                <a href="blogpost-page.html" title="Today still wanted by the government survive"><h3>Today still wanted by the government survive</h3></a>
                            </div>
                            <div class="entry-content">
                                <p>You would see the biggest gift would be from me and the card attached would say thank you for being a friend.</p>
                            </div>
                            <a href="blogpost-page.html" class="learn-more" title="Learn More">Learn More</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
        <div class="section-padding"></div>
    </div><!-- Latest News /- -->

<!--    <div class="container-fluid testimonial-section no-padding">
        <div class="section-padding"></div>
        <div class="container">
            <div class="section-header">
                <h3>what our clients say about us</h3>
                <span>Feedback From Our Clients</span>
            </div>
            <div class="testimonial-carousel">
                <div class="testimonial-block row">
                    <div class="col-md-5 col-sm-12 no-padding">
                        <div class="testimonial-carousel-left">
                            <div class="testimonial-box testimonial-left">
                                <div class="testimonial-content">
                                    <p>Feels so right it cant be wrong. Rockin' and rollin' all week long. Then one day he was shootin' at some food..</p>
                                    <span>hendry smith villa</span>
                                </div>
                                <img :src="'/front/images/testimonial1.jpg'" alt="testimonial1" width="144" height="136"/>
                            </div>
                            <div class="testimonial-box testimonial-left">
                                <div class="testimonial-content">
                                    <p>Feels so right it cant be wrong. Rockin' and rollin' all week long. Then one day he was shootin' at some food..</p>
                                    <span>hendry smith villa</span>
                                </div>
                                <img :src="'/front/images/testimonial1.jpg'" alt="testimonial1" width="144" height="136"/>
                            </div>
                            <div class="testimonial-box testimonial-left">
                                <div class="testimonial-content">
                                    <p>Feels so right it cant be wrong. Rockin' and rollin' all week long. Then one day he was shootin' at some food..</p>
                                    <span>hendry smith villa</span>
                                </div>
                                <img :src="'/front/images/testimonial1.jpg'" alt="testimonial1" width="144" height="136"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-12">
                        <div class="testimonial-blockquote-circle">
                            <span><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12 no-padding">
                        <div class="testimonial-carousel-right">
                            <div class="testimonial-box testimonial-right">
                                <div class="testimonial-content">
                                    <p>These Happy Days are yours and mine Happy Days. So get a witch's shawl on a broomstick you can crawl on. </p>
                                    <span>Mike Davidson</span>
                                </div>
                                <img :src="'/front/images/testimonial2.jpg'" alt="testimonial1" width="144" height="136"/>
                            </div>
                            <div class="testimonial-box testimonial-right">
                                <div class="testimonial-content">
                                    <p>These Happy Days are yours and mine Happy Days. So get a witch's shawl on a broomstick you can crawl on. </p>
                                    <span>Mike Davidson</span>
                                </div>
                                <img :src="'/front/images/testimonial2.jpg'" alt="testimonial1" width="144" height="136"/>
                            </div>
                            <div class="testimonial-box testimonial-right">
                                <div class="testimonial-content">
                                    <p>These Happy Days are yours and mine Happy Days. So get a witch's shawl on a broomstick you can crawl on. </p>

                                    <span>Mike Davidson</span>
                                </div>
                                <img :src="'/front/images/testimonial2.jpg'" alt="testimonial1" width="144" height="136"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-padding"></div>
    </div>-->
</div>
</template>

<script>
import MainSlider from "@/front/Pages/blocks/MainSlider.vue";
import Advantages from "@/front/Pages/blocks/Advantages.vue";
import DevelopmentTechnologies from "@/front/Pages/blocks/DevelopmentTechnologies.vue";
import ApplicationForDevelopment from "@/front/Pages/blocks/ApplicationForDevelopment.vue";
import SomeExamples from "@/front/Pages/blocks/SomeExamples.vue";
import StageOfWork from "@/front/Pages/blocks/StageOfWork.vue";
export default {
    name: 'MainPage',
    components: {
        StageOfWork,
        SomeExamples,
        MainSlider,
        Advantages,
        DevelopmentTechnologies,
        ApplicationForDevelopment,
    },
    mounted() {

    },
    methods:{

    }
}
</script>

<style lang="scss" scoped>

</style>
