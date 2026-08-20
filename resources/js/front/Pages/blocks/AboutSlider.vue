<template>
    <AboutSlide v-for="(slide,index) in this.sliderInfo"
           :key="index"
           :slide="slide"
           :index="index"
            :slider="this.sliderInfo"
           :sliderLength="this.sliderLength"
    />
</template>
<script>
import AboutSlide from "@/front/Pages/blocks/Slide/AboutSlide.vue";
export default {
    name: 'AboutSlider',
    data(){
        return {
            sliderInfo: null,
            slideInfo: null,
            slideNumber: 0,
            sliderLength: 0
        }
    },
    components:{
        AboutSlide,
    },
    beforeMount() {
        this.getSliderInfo()
    },
    methods:{
        getSliderInfo(){
            axios.get('/api/front/about_slider')
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
<style scoped>

</style>
