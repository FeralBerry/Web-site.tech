<template>
    <banners
        :title="this.title"
        :links="this.links"
        :countLinks="this.countLinks"
        :img="this.img_url"
        :key="this.$parent.$parent.bannerKey"
    />
    <div class="container-fluid eventlist blog blogpost upcoming-event latest-blog no-padding">
        <div class="section-padding"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 content-area">
                    <article class="type-post" v-for="(item,index) in this.works">
                        <div class="entry-cover">
                            <template v-if="this.$parent.$parent.lang === 'eng'">
                                <img :src="item.img" :alt="item.title_eng"/>
                            </template>
                            <template v-if="this.$parent.$parent.lang === 'rus'">
                                <img :src="item.img" :alt="item.title_ru"/>
                            </template>
                        </div>
                    </article>
                </div>
            </div>
        </div>
        <div class="section-padding"></div>
    </div>
</template>
<script>
import Banners from "@/front/Pages/blocks/Banners.vue";

export default {
    name: 'CopiesArticlePage',
    components: {Banners},
    data(){
        return {
            img_url:null,
            links: null,
            title: null,
            title_ru: null,
            title_eng: null,
            countLinks: null,
            works:null
        }
    },
    mounted() {
        this.getCopiesArticle()
    },
    methods:{
        getCopiesArticle(){
            axios.get('/api/front/copies/article/' + this.$route.params.id)
                .then(res => {
                    this.works = res.data
                    this.title_ru = res.data[0].title_ru
                    this.title_eng = res.data[0].title_eng
                    console.log(this.works)
                    this.addLinks()
                })
        },
        addLinks(){
            if(this.$parent.$parent.lang === 'eng'){
                this.title = this.title_eng
                this.links = {
                    0: {
                        url: '/',
                        title:'Home'
                    },
                    1: {
                        url: '/copies',
                        title:'сopies of work'
                    },
                    2: {
                        url: '/copies/' + this.$route.params.id,
                        title: this.title_eng
                    }
                }
                this.countLinks = 3
                this.img_url ='/front/images/banners/about-banner.jpg'
            }
            if(this.$parent.$parent.lang === 'rus'){
                this.title = this.title_ru
                this.links = {
                    0: {
                        url: '/',
                        title:'Главная'
                    },
                    1: {
                        url: '/copies',
                        title:'примеры работ'
                    },
                    2: {
                        url: '/copies/' + this.$route.params.id,
                        title: this.title_ru
                    }
                }
                this.countLinks = 3
                this.img_url ='/front/images/banners/about-banner.jpg'
            }
        },
    }
}
</script>
<style scoped>

</style>
