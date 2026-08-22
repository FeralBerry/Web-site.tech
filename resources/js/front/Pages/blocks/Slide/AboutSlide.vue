<template>
        <div class="container">
            <div class="col-md-6">
                <transition name="content">
                    <div v-if="indexSlide === currentSlide">
                        <div class="no-padding">
                            <div class="team-content">
                                <template v-if="this.$parent.$parent.$parent.$parent.lang === 'eng'">
                                    <h3 class="slider-title">{{ slide.title_eng }}</h3>
                                    <p v-html="this.slide.slider_p_eng"></p>
                                </template>
                                <template v-if="this.$parent.$parent.$parent.$parent.lang === 'rus'">
                                    <h3 class="slider-title">{{ slide.title_ru }}</h3>
                                    <p v-html="this.slide.slider_p_ru"></p>
                                </template>
                            </div>
                        </div>
                    </div>
                </transition>
            </div>
            <div class="col-md-6">
                <transition name="image">
                    <div v-if="index === currentSlide" class="no-padding larg-thumb about-img">
                        <img :src="slide.img" width="960" height="670" alt="team1"/>
                    </div>
                </transition>
            </div>
        </div>
</template>
<script>
export default {
    name: 'AboutSlide',
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
            indexSlide:0
        }
    },
    mounted() {
        this.nextSlideAuto()
        this.dataItem()
    },
    methods:{
        dataItem(){
            this.indexSlide = this.$props.index
        },
        nextSlideAuto(){
            setInterval(() => {
                this.currentSlide++
                if(this.currentSlide === this.sliderLength){
                    this.currentSlide = 0
                }
            }, 25000)
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
    }
}
</script>
<style scoped>
.image-enter-from{
    opacity: 0;
    z-index: -100;
    transform: translateX(100%);
}
.image-enter-to{
    opacity: 1;
    z-index: 1;
    transform: translateX(0);
}
.image-enter-active{
    transition: all ease 2s;
}
.image-leave-from{
    display: block;
}
.image-leave-to{
    display: none;
}
.image-leave-active{
    transition: all ease 0.01s;
}
.about-img{
    position: absolute;
}
.content-enter-from{
    opacity: 0;
    z-index: -100;
    transform: translateX(-100%);
}
.content-enter-to{
    opacity: 1;
    z-index: 1;
    transform: translateX(0);
}
.content-enter-active{
    transition: all ease 2s;
}
.content-leave-from{
    display: block;
}
.content-leave-to{
    display: none;
}
.content-leave-active{
    transition: all ease 0.01s;
}
</style>
