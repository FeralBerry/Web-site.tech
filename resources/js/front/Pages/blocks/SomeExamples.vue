<template>
    <div class="container-fluid latest-blog latest-blog-section no-padding">
        <div class="section-padding"></div>
        <div class="container">
            <div class="section-header">
                <template v-if="this.$parent.$parent.$parent.lang === 'eng'">
                    <h3>Some examples of work</h3>
                    <span>From which you can draw your own conclusions.</span>
                </template>
                <template v-else-if="this.$parent.$parent.$parent.lang === 'rus'">
                    <h3>Немного примеров работ</h3>
                    <span>Из которых вы сами сможете сделать выводы.</span>
                </template>
            </div>
            <div class="row">
                <SomeExampleMainSlide v-for="(slide,index) in this.sliderInfo"
                                      :key="index"
                                      :slide="slide"
                                      :index="index"
                                      :slider="this.sliderInfo"
                                      :sliderLength="this.sliderLength"
                />
            </div>
        </div>
    </div>
</template>
<script>
import SomeExampleMainSlide from "@/front/Pages/blocks/Slide/SomeExampleMainSlide.vue";
export default {
    name: 'SomeExamples',
    components:{
        SomeExampleMainSlide,
    },
    data(){
        return{
            someExamples:null,
            exampleIndex:0,
            sliderInfo: null,
            slideInfo: null,
            slideNumber: 0,
            sliderLength: 0
        }
    },
    beforeMount() {
        this.getSomeExamples()
    },
    methods:{
        getSomeExamples(){
            axios.get('/api/front/some-examples')
                .then(res => {
                    this.sliderInfo = res.data
                    for(let i = 0; i < this.sliderInfo.length; i++){
                        this.sliderInfo[i].number = i
                    }
                    this.sliderLength = this.sliderInfo.length
                    this.someExamples = res.data
                })
        },
    }
}
</script>
<style scoped>
.fade-up-enter-from{
    transform: translateY(-100%)
}
.fade-up-enter-to{
    transform: translateY(0);
}
.fade-up-enter-active{
    transition: all 2s ease;
}
.fade-up-leave-from{
    transform: translateY(0);
}
.fade-up-leave-to{
    transform: translateY(-100%)
}
.fade-up-leave-active{
    transition: all 2s ease;
}
</style>
