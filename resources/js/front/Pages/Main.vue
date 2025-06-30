<template>
<div>
        <MainSlider/>
        <Advantages/>
        <DevelopmentTechnologies/>
        <ApplicationForDevelopment/>
        <SomeExamples/>
        <StageOfWork/>
        <MainBlog/>




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
import MainBlog from "@/front/Pages/blocks/MainBlog.vue";
export default {
    name: 'MainPage',
    components: {
        MainBlog,
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
