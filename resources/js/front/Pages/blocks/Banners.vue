<template>
    <div class="container-fluid page-banner no-padding">
        <div class="section-padding"></div>
        <div class="container">
            <div class="banner-content-block">
                <div class="banner-content">
                    <h3>{{ title }}</h3>
                    <ol class="breadcrumb">
                        <template v-for="(link,index) in this.$props.links" :key="index">
                            <BannerUrl
                                :countLinks="this.$props.countLinks"
                                :index="index"
                                :link="link"
                            />
                        </template>

                    </ol>
                </div>
            </div>
        </div>
        <div class="section-padding"></div>
    </div>
</template>
<script>
import BannerUrl from "@/front/Pages/blocks/BannerUrl.vue";

export default {
    name:"Banners",
    components: {BannerUrl},
    data(){
        return{
            title: null,
            links: null,
            countLinks: null,
            img: null
        }
    },
    props:[
        'title',
        'links',
        'img',
        'key',
        'countLinks'
    ],

    beforeMount() {
        this.$parent.addLinks()
    },
    mounted() {
        this.setBannerImg()
    },
    methods:{
        setBannerImg(){
            document.querySelector('.page-banner').style.cssText = 'background: url(' +this.$props.img + ') no-repeat center center;' +
                'background-size: cover;'
        },
    }
}
</script>
<style scoped>

</style>
