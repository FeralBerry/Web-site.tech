<template>
<div>
    <banners
        :title="this.title"
        :links="this.links"
        :countLinks="this.countLinks"
        :img="this.img_url"
        :key="this.$parent.$parent.bannerKey"
    />
    <!-- Team Section -->
    <div class="container-fluid no-padding team-section">
        <div class="section-padding"></div>
        <div class="section-header">
            <h3>Чтобы лучше понять с кем имеете дело</h3>
            <span>Я немного расскажу о себе</span>
        </div>
        <AboutSlider></AboutSlider>
        <div class="section-padding"></div>
    </div><!-- Team Section /- -->
</div>
</template>
<script>
import AboutSlider from "@/front/Pages/blocks/AboutSlider.vue";
import Banners from "@/front/Pages/blocks/Banners.vue";

export default {
    name: 'AboutPage',
    data(){
        return {
            title:'',
            links:null,
            countLinks:null,
            img:null
        }
    },
    components: {Banners, AboutSlider},
    methods:{
        addLinks(){
            if(this.$parent.$parent.lang === 'eng'){
                this.title = 'About'
                this.links = {
                    0: {
                        url: '/',
                        title:'Home'
                    },
                    1: {
                        url: '/about',
                        title:'about'
                    }
                }
                this.countLinks = 2
                this.img_url ='/front/images/banners/about-banner.jpg'
            }
            if(this.$parent.$parent.lang === 'rus'){
                this.title = 'Обо мне'
                this.links = {
                    0: {
                        url: '/',
                        title:'Главная'
                    },
                    1: {
                        url: '/about',
                        title:'Обо мне'
                    }
                }
                this.countLinks = 2
                this.img_url ='/front/images/banners/about-banner.jpg'
            }
        }
    }
}
</script>
<style scoped>

</style>
