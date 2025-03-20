<template>
    <transition name="slide">
        <div v-if="index === currentSlide" class="carousel-inner">
            <div class="item active">
                <img :id="'carousel-img_' + this.currentSlide" class="carousel-img" :src="this.slide.img" :alt="this.slide.alt_img" style="position: absolute"/>
                    <div class="container">
                        <div class="col-md-5 col-sm-6 col-xs-12 pull-right" style="text-align: center">
                            <div :id="'main_slider_slide_' + this.currentSlide" class="slider-content-box" :style="'height:'+this.mainSliderContentBoxHeight">
                                <div class="col-md-12 col-sm-12 col-xs-12 no-padding">
                                    <template v-if="this.$parent.$parent.$parent.$parent.lang === 'eng'">
                                        <h3 class="slider-title">{{ this.slide.slider_title_eng }}</h3>
                                        <p v-html="this.slide.slider_p_eng"></p>
                                    </template>
                                    <template v-if="this.$parent.$parent.$parent.$parent.lang === 'rus'">
                                        <h3 class="slider-title">{{ this.slide.slider_title_ru }}</h3>
                                        <p v-html="this.slide.slider_p_ru"></p>
                                    </template>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 no-padding">
                                    <SliderButton/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </transition>
</template>
<script>
import SliderButton from "@/front/Pages/blocks/Slide/SliderButton.vue";
export default {
    name: 'Slide',
    props:{
        slide:{
            required: true,
            type: Object
        },
        index:{
            required: true,
            type: Number
        },
        sliderLength:{
            required: true,
            type: Number
        },
    },
    data() {
        return {
            currentSlide: 0,
            mainSliderHeight: '',
            mainSliderContentBoxHeight: '200px',
        }
    },
    components:{
        SliderButton
    },
    mounted() {
        this.nextSlideAuto()
        this.sliderHeight()
    },
    methods:{
        nextSlideAuto(){
            setInterval(() => {
                this.currentSlide++
                if(this.currentSlide === this.sliderLength){
                    this.currentSlide = 0
                }
            }, 10000)
        },
        prevSlide(){
            this.currentSlide--
            if(this.currentSlide < 0){
                this.currentSlide = this.sliderLength
            }
        },
        nextSlide(){
            this.currentSlide++
            if(this.currentSlide === this.sliderLength){
                this.currentSlide = 0
            }
        },
        sliderHeight(){
            if(window.innerWidth > 600){
                this.mainSliderContentBoxHeight = (document.getElementById('carousel-img_' + this.currentSlide).height * 80 /100) + 'px'
                document.getElementById('main_slider').style.height = document.getElementById('carousel-img_' + this.currentSlide).height + 'px'
            } else {
                this.mainSliderContentBoxHeight = '200px'
            }

            window.addEventListener('resize', (e) => {
                if(window.innerWidth > 600){
                    this.mainSliderContentBoxHeight = (document.getElementById('carousel-img_' + this.currentSlide).height * 80 /100) + 'px'
                    document.getElementById('main_slider').style.height = document.getElementById('carousel-img_' + this.currentSlide).height + 'px'
                } else {
                    this.mainSliderContentBoxHeight = '200px'
                }
            });
        }
    }
}
</script>
<style scoped>
.slide-enter-from{
    transform: translateX(-100%)
}
.slide-enter-to{
    transform: translateX(0px)
}
.slide-enter-active{
    transition: all ease 3s;
}
.slide-leave-from{
    transform: translateX(0)
}
.slide-leave-to{
    transform: translateX(100%)
}
.slide-leave-active{
    transition: all ease 2s;
}
.carousel-inner{
    position: absolute;
    width: 100%;
    overflow: hidden;
}
.carousel-img{
    width: 100%;
}
.slider-content-box{
    margin-top: 10%;
}
@media (max-width: 600px) {
    .slider-content-box{
        margin-top: 0;
    }
    .item{
        height: 500px;
    }
}
</style>
