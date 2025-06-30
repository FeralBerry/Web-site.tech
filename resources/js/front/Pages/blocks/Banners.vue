<template>
    <div class="container-fluid page-banner no-padding">
        <div class="section-padding"></div>
        <div class="container">
            <div class="banner-content-block">
                <div class="banner-content">
                    <h3>{{ title }}</h3>
                    <ol class="breadcrumb">
                        <template v-for="(link,index) in this.links" :key="index">
                            <BannerUrl
                                :countLinks="this.countLinks"
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

        }
    },
    props:{
        title:{
            type:String,
            required:true
        },
        links:{
            type:Object,
            required:true
        },
        img:{
            type:String,
            required:true
        },
        countLinks:{
            type:Number,
            required:true
        }
    },
    mounted() {
        this.setBannerImg()

    },
    methods:{
        setBannerImg(){
            document.querySelector('.page-banner').style.cssText = 'background: url(' +this.img + ') no-repeat center center;' +
                'background-size: cover;'
        },

    }
}
</script>
<style scoped>

</style>
