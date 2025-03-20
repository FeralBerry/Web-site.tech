<template>
<div>
<banners :title="this.title" :links="this.links" :img="this.ing_url"/>
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
            links: {
                0: {
                    url: '/',
                    title:'Home'
                },
                1: {
                    url: '/blog',
                    title:'blog'
                }
            },
            ing_url:'/front/images/banners/about-banner.jpg'
        }
    },
}
</script>
<style scoped>

</style>
