<template>
    <div class="container-fluid no-padding introduction-section">

        <swiper
            :slidesPerView="this.count"
            :loop="true"
            :scrollbar="{
          hide: true,
        }"
            :modules="modules"
            class="mySwiper"
        >
            <template v-for="(slide, index) in developmentTechnologies" :key="index">
                <swiper-slide>
                    <div class="col-md-12 no-padding">
                        <div class="introduction-block" :id="'introduction_' + index">
                            <img :src="slide.img" class="introduction_img" :alt="slide.alt_img">
                            <template v-if="this.$parent.$parent.$parent.lang === 'eng'">
                                <h3 class="block-title">{{ slide.block_title_eng }}</h3>
                                <span class="icon" v-html="slide.icon"></span>
                                <p v-html="slide.block_p_eng"></p>
                                <template v-if="slide.link !== ''">
                                    <router-link :to="slide.link" :title="slide.link_title_eng">{{ slide.link_button_text_eng }}</router-link>
                                </template>
                            </template>
                            <template v-if="this.$parent.$parent.$parent.lang === 'rus'">
                                <h3 class="block-title">{{ slide.block_title_ru }}</h3>
                                <span class="icon" v-html="slide.icon"></span>
                                <p v-html="slide.block_p_ru"></p>
                                <template v-if="slide.link !== ''">
                                    <router-link :to="slide.link" :title="slide.link_title_ru">{{ slide.link_button_text_ru }}</router-link>
                                </template>
                            </template>
                        </div>
                    </div>
                </swiper-slide>
            </template>
        </swiper>
    </div>
</template>
<script>

import { Swiper, SwiperSlide } from 'swiper/vue';
import 'swiper/css';
import 'swiper/css/scrollbar';
import { Scrollbar } from 'swiper/modules';

export default {
    name:'DevelopmentTechnologies',
    data(){
        return{
            developmentTechnologies: null,
            blockHeight:0,
            img: "/logo-big-white.png",
            count: 3
        }
    },
    components: {
        Swiper,
        SwiperSlide,
    },
    setup() {
        return {
            modules: [Scrollbar],
        };
    },
    mounted() {
        this.getDevelopmentTechnologies()
        this.countSwiper()
    },

    methods:{
        getDevelopmentTechnologies(){
            axios.get('/api/front/development-technologies')
                .then(res => {
                    this.developmentTechnologies = res.data
                    setTimeout(() => {
                        let h
                        for (let i = 0; i < this.developmentTechnologies.length; i++) {
                            h = document.getElementById('introduction_' + i).offsetHeight
                            if(this.blockHeight < h){
                                this.blockHeight = h
                            }
                        }
                        for (let i = 0; i < this.developmentTechnologies.length; i++) {
                            document.getElementById('introduction_' + i).setAttribute("style","height:" + this.blockHeight + "px")
                        }
                    },100)
                })
        },
        countSwiper(){
            if(window.innerWidth < 600){
                this.count = 1
            }
            if(window.innerWidth < 1200 && window.innerWidth > 599){
                this.count = 2
            }
            if(window.innerWidth < 1800 && window.innerWidth > 1199){
                this.count = 3
            }
            if(window.innerWidth > 1799){
                this.count = 4
            }
        }
    }
};
</script>
