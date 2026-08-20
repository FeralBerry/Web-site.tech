<template>
    <banners
        :title="this.title"
        :links="this.links"
        :countLinks="this.countLinks"
        :img="this.img_url"
        :key="this.$parent.$parent.bannerKey"
    />
    <div class="container-fluid our-history our-history-section upcoming-event latest-blog no-padding">
        <div class="section-padding"></div>
        <div class="container">
            <div class="section-header">
                <template v-if="this.$parent.$parent.lang === 'eng'">
                    <h3>Examples of works</h3>
                    <span>Based on them, you can order for yourself or come up with your own design.</span>
                </template>
                <template v-if="this.$parent.$parent.lang === 'rus'">
                    <h3>Примеры работ</h3>
                    <span>На основе их можно заказать себе или придумать свой дизайн.</span>
                </template>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6" v-for="(item,index) in this.works">
                    <template v-if="this.$parent.$parent.lang === 'eng'">
                        <article class="type-post">
                            <div class="entry-cover">
                                <router-link :to="{name:'front.copies.example', params: { id: item.id }}"><img :src="asset('/front/images/history1.jpg')" :alt="item.title_eng" width="370" height="300"/></router-link>
                            </div>
                            <div class="entry-block">
                                <div class="entry-title">
                                    <router-link :to="{name:'front.copies.example', params: { id: item.id }}" :title="item.title_eng"><h3>{{ item.title_eng }}</h3></router-link>
                                </div>
                                <div class="entry-content">
                                    <p v-html="item.description_eng.slice(0, 250).replace(/<\/?[^>]+(>|$)/g, '') + '...'"></p>
                                </div>
                                <router-link :to="{name:'front.copies.example', params: { id: item.id }}" class="learn-more" title="Learn More">Learn More</router-link>
                            </div>
                        </article>
                    </template>
                    <template v-if="this.$parent.$parent.lang === 'rus'">
                        <article class="type-post">
                            <div class="entry-cover">
                                <router-link :to="{name:'front.copies.example', params: { id: item.id }}"><img :src="asset('/front/images/history1.jpg')" :alt="item.title_ru" width="370" height="300"/></router-link>
                            </div>
                            <div class="entry-block">
                                <div class="entry-title">
                                    <router-link :to="{name:'front.copies.example', params: { id: item.id }}" :title="item.title_ru"><h3>{{ item.title_ru }}</h3></router-link>
                                </div>
                                <div class="entry-content">
                                    <p v-html="item.description_ru.slice(0, 250).replace(/<\/?[^>]+(>|$)/g, '') + '...'"></p>
                                </div>
                                <router-link :to="{name:'front.copies.example', params: { id: item.id }}" class="learn-more" title="Подробнее">Подробнее</router-link>
                            </div>
                        </article>
                    </template>
                </div>
            </div>
        </div>
        <div class="section-padding"></div>
    </div>
</template>
<script>
import Banners from "@/front/Pages/blocks/Banners.vue";

export default {
    name: 'CopiesPage',
    components: {Banners},
    data(){
        return {
            img_url:null,
            links: null,
            title: null,
            countLinks: null,
            works:null
        }
    },
    mounted() {
        this.getWorks()
    },
    methods:{
        getWorks(){
            axios.get('/api/front/copies')
                .then(res => {
                    this.works = res.data.data
                    console.log(res.data.data)
                })
        },
        addLinks(){
            if(this.$parent.$parent.lang === 'eng'){
                this.title = 'Copies of work'
                this.links = {
                    0: {
                        url: '/',
                        title:'Home'
                    },
                    1: {
                        url: '/copies',
                        title:'сopies of work'
                    }
                }
                this.countLinks = 2
                this.img_url = asset('/front/images/banners/about-banner.jpg')
            }
            if(this.$parent.$parent.lang === 'rus'){
                this.title = 'Примеры работ'
                this.links = {
                    0: {
                        url: '/',
                        title:'Главная'
                    },
                    1: {
                        url: '/copies',
                        title:'примеры работ'
                    }
                }
                this.countLinks = 2
                this.img_url = asset('/front/images/banners/about-banner.jpg')
            }
        },
    }
}
</script>
<style scoped>

</style>
