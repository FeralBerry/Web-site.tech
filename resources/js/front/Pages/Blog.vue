<template>
<div>
<banners :title="this.title" :links="this.links" :countLinks="this.countLinks" :img="this.ing_url"/>
</div>
</template>
<script>
import Banners from "@/front/Pages/blocks/Banners.vue";

export default {
    name: 'BlogPage',
    components: {Banners},
    data(){
        return{
            title:'Blog',
            links: null,
            countLinks:2,
            ing_url:'/front/images/banners/about-banner.jpg'
        }
    },
    mounted() {
        this.addLinks()
    },
    methods:{
        addLinks(){
            this.links = {
                0: {
                    url: '/',
                    title:'Home'
                },
                1: {
                    url: '/blog',
                    title:'blog'
                }
            }
        }
    }
}
</script>
<style scoped>

</style>
