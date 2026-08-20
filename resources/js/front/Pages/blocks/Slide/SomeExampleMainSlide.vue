<template>
        <div class="container">
            <div class="col-md-12">
                <div class="col-md-6">
                    <transition name="content">
                        <div v-if="indexSlide === currentSlide">
                            <div class="no-padding">
                                <div class="team-content">
                                    <template v-if="this.$parent.$parent.$parent.$parent.lang === 'eng'">
                                        <h3 class="slider-title"><router-link :to="{name:'front.copies.example', params: { id: slide.id }}">{{ slide.title_eng }}</router-link></h3>
                                        <p v-html="this.slide.description_eng.slice(0, 250).replace(/<\/?[^>]+(>|$)/g, '') + '...'"></p>
                                        <router-link class="btn-send" :to="{name:'front.copies.example', params: { id: slide.id }}">Read more</router-link>
                                    </template>
                                    <template v-if="this.$parent.$parent.$parent.$parent.lang === 'rus'">
                                        <h3 class="slider-title"><router-link :to="{name:'front.copies.example', params: { id: slide.id }}">{{ slide.title_ru }}</router-link></h3>
                                        <p v-html="this.slide.description_ru.slice(0, 250).replace(/<\/?[^>]+(>|$)/g, '') + '...'"></p>
                                        <router-link :to="{name:'front.copies.example', params: { id: slide.id }}">Подробнее</router-link>
                                    </template>
                                </div>
                            </div>
                        </div>
                    </transition>
                </div>
                <div class="col-md-6">
                    <transition name="image">
                        <div v-if="index === currentSlide" class="no-padding larg-thumb example-img">
                            <router-link :to="{name:'front.copies.example', params: { id: slide.id }}"><img :src="slide.slide_img" width="960" height="670" :alt="slide.title_eng"/></router-link>
                        </div>
                    </transition>
                </div>
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
.example-img{
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
.btn-send{
    position: relative;
    padding: 14px 29px;
    text-decoration: none;
    background-color: #ff6400;
    border: 1px solid transparent;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 1.56px;
    color: #fff;
    display: inline-block;
    z-index: 3;
}
.btn-send::before {
    position: absolute;
    content: "";
    background: #052f6d;
    height: 0;
    left: 50%;
    top: 50%;
    -webkit-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -ms-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
    width: 103%;
    transition: all 0.3s ease 0s;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    z-index: -1;
}
.btn-send:hover {
    color: #ffe373;
}
.btn-send:hover::before {
    height: 75%;
}
</style>
