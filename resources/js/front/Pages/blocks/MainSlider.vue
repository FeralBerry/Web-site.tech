<template>
<div id="main_slider" class="carousel">
    <Slide v-for="(slide,index) in this.sliderInfo"
           :key="index"
           :slide="slide"
           :index="index"
           :sliderLength="this.sliderLength"
    />
</div>
</template>
<script>

import Slide from "@/front/Pages/blocks/Slide/Slide.vue";
export default {
    name: 'MainSlider',
    data(){
        return {
            sliderInfo: null,
            slideInfo: null,
            slideNumber: 0,
            sliderLength: 0
        }
    },
    components:{
        Slide,
    },
    beforeMount() {
        this.getSliderInfo()
    },
    methods:{
        getSliderInfo(){
            axios.get('/api/front/main_slider')
                .then(res => {
                    this.sliderInfo = res.data
                    for(let i = 0; i < this.sliderInfo.length; i++){
                        this.sliderInfo[i].number = i
                    }
                    this.sliderLength = this.sliderInfo.length
            })
        },

    }
}
</script>
<style>
.carousel{
    position: relative;
}
</style>
