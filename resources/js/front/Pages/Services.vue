<template>
    <banners
        :title="this.title"
        :links="this.links"
        :key="this.$parent.$parent.bannerKey"
        :img="this.img_url"
        :countLinks="this.countLinks"
    ></banners>
    <div class="container-fluid our-history our-history-section upcoming-event latest-blog no-padding">
        <div class="section-padding"></div>
        <div class="container">
            <div class="section-header">
                <template v-if="this.$parent.$parent.lang === 'eng'">
                    <h3>Our Successful History</h3>
                    <span>Recent Events</span>
                </template>
                <template v-if="this.$parent.$parent.lang === 'rus'">
                    <h3>Our Successful History</h3>
                    <span>Recent Events</span>
                </template>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6" v-for="(item,index) in this.services">
                    <article class="type-post">
                        <div class="entry-cover">
                            <a href="eventsingle-page.html"><img :src="asset('/front/images/history1.jpg')" alt="history" width="370" height="300"/></a>
                        </div>
                        <div class="entry-block">
                            <div class="entry-title">
                                <a href="eventsingle-page.html" title="Corporate Paper Meetup Event"><h3>Corporate Paper Meetup Event</h3></a>
                            </div>
                            <div class="entry-meta">
                                <div class="post-date">
                                    <p>Feb<span>21</span></p>
                                </div>
                                <div class="post-metablock">
                                    <div class="post-time">
                                        <span>03:00pm - 07:00pm</span>
                                    </div>
                                    <div class="post-location">
                                        <span>1st Street, LA, Australia</span>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-content">
                                <p>The ship set ground on the shore of this uncharted desert isle Gilligan [...]</p>
                            </div>
                            <a href="eventsingle-page.html" class="learn-more" title="Learn More">Learn More</a>
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
    name: 'ServicesPage',
    components: {Banners},
    data(){
        return {
            img_url:'/front/images/banners/about-banner.jpg',
            services: null,
            links: null,
            title: null,
            countLinks: null,
        }
    },
    mounted() {
        this.getServices()
    },
    methods:{
        getServices(){
            axios.get('/api/front/service')
                .then(res => {
                    this.services = res.data.data
            })
        },
        addLinks(){
            if(this.$parent.$parent.lang === 'eng'){
                this.title = 'Services'
                this.links = {
                    0: {
                        url: '/',
                        title:'Home'
                    },
                    1: {
                        url: '/services',
                        title:'services'
                    }
                }
                this.countLinks = 2
                this.img_url ='/front/images/banners/about-banner.jpg'
            }
            if(this.$parent.$parent.lang === 'rus'){
                this.title = 'Услуги'
                this.links = {
                    0: {
                        url: '/',
                        title:'Главная'
                    },
                    1: {
                        url: '/services',
                        title:'услуги'
                    }
                }
                this.countLinks = 2
                this.img_url ='/front/images/banners/about-banner.jpg'
            }
        },
    }
}
</script>
<style scoped>

</style>
