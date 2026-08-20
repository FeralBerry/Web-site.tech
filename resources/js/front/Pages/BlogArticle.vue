<template>
<div>
    <banners :title="this.title" :links="this.links" :countLinks="this.countLinks" :img="this.img_url" :key="this.$parent.$parent.bannerKey"/>
    <div class="container-fluid eventlist blog blogpost upcoming-event latest-blog no-padding">
        <div class="section-padding"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-6 content-area">
                    <article class="type-post" v-for="(item,index) in article">
                        <div class="entry-cover">
                            <template v-if="this.$parent.$parent.lang === 'eng'">
                                <img :src="item.img" :alt="item.title_eng" width="810" height="376"/>
                            </template>
                            <template v-if="this.$parent.$parent.lang === 'rus'">
                                <img :src="item.img" :alt="item.title_ru" width="810" height="376"/>
                            </template>
                        </div>
                        <div class="entry-block">
                            <div class="entry-meta">
                                <div class="post-date">
                                    <a href="#" title=""><i class="fa fa-calendar" aria-hidden="true"></i><span>{{ new Date(item.created_at).toLocaleDateString() }}</span></a>
                                </div>
                                <div class="post-admin">
                                    <i class="fa fa-user" aria-hidden="true"></i><span>by</span>{{ item.author }}
                                </div>
                                <div class="post-like">
                                    <template v-if="this.blog_likes === undefined">
                                        <a @click="this.blog_like(item.id)" title="Likes">
                                            <i class="fa fa-heart-o" aria-hidden="true"></i><span>{{ item.likes }}</span>
                                        </a>
                                    </template>
                                </div>
<!--                                <div class="post-tag">
                                    <a href="#" title="Tag"><i class="fa fa-tag" aria-hidden="true"></i></a>
                                    <ul>
                                        <li><a href="#" title="Event Management">Event Management</a></li>
                                        <li><a href="#" title="Organizing">Organizing</a></li>
                                        <li><a href="#" title="Meeting">Meeting</a></li>
                                    </ul>
                                </div>-->
                            </div>
                            <template v-if="this.$parent.$parent.lang === 'eng'">
                                <div class="entry-title">
                                    <h3>{{ item.title_eng }}</h3>
                                </div>
                                <div class="entry-content" v-html="item.description_eng">
                                </div>
                            </template>
                            <template v-if="this.$parent.$parent.lang === 'rus'">
                                <div class="entry-title">
                                    <h3>{{ item.title_ru }}</h3>
                                </div>
                                <div class="entry-content" v-html="item.description_ru">
                                </div>
                            </template>
                        </div>
                    </article>
                    <blog-comment/>
                </div>
                <right-side-bar-blog/>
            </div>
        </div>
        <div class="section-padding"></div>
    </div>
</div>
</template>
<script>

import Banners from "@/front/Pages/blocks/Banners.vue";
import RightSideBarBlog from "@/front/Pages/blocks/RightSideBarBlog/RightSideBarBlog.vue";
import BlogComment from "@/front/Pages/blocks/BlogComment.vue";

export default {
    name: 'BlogArticle',
    components: {BlogComment, Banners,RightSideBarBlog},
    data(){
        return{
            article:null,
            title:'',
            id:0,
            links: null,
            countLinks:3,
            img_url:'/front/images/banners/about-banner.jpg',
            blog_likes: null,
            title_eng:null,
            title_ru:null,
        }
    },
    mounted() {
        this.getArticleInfo()
    },
    methods:{
        getArticleInfo(){
            axios.get('/api/front/blog/' + this.$route.params.id)
                .then(res => {
                    this.article = res.data.blog
                    this.blog_likes = res.data.blog_likes.data
                    this.id = res.data.blog[0].id
                    this.title_eng = res.data.blog[0].title_eng
                    this.title_ru = res.data.blog[0].title_ru
                })
        },
        addLinks(){
            if(this.$parent.$parent.lang === 'eng'){
                this.links = {
                    0: {
                        url: '/',
                        title:'Home'
                    },
                    1: {
                        url: '/blog',
                        title:'Blog'
                    },
                    2: {
                        url: '/blog/' + this.id,
                        title: this.title_eng
                    }
                }
                this.title = this.title_eng
            } else if(this.$parent.$parent.lang === 'rus'){
                this.links = {
                    0: {
                        url: '/',
                        title:'Главная'
                    },
                    1: {
                        url: '/blog',
                        title:'Блог'
                    },
                    2: {
                        url: '/blog/' + this.id,
                        title: this.title_ru
                    }
                }
                this.title = this.title_ru
            }
        },
        blog_like(id){
            axios.post('/api/front/blog_likes/' + id)
                .then(res => {
                    alert(res.data)
                })
        },
    }
}
</script>
<style scoped>

</style>
