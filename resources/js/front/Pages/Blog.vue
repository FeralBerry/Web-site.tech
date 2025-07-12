<template>
<div>
<banners :title="this.title" :links="this.links" :countLinks="this.countLinks" :img="this.ing_url"/>
    <div class="container-fluid eventlist blog upcoming-event latest-blog no-padding">
        <div class="section-padding"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-6 col-xs-6 content-area">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-6 blog-box" v-for="(b,index) in blog">
                            <article class="type-post">
                                <div class="entry-cover">
                                    <router-link :to="{ name: 'front.blog.article', params: { id: b.id }}">
                                        <template v-if="this.$parent.$parent.lang === 'eng'">
                                            <img :src="b.img" :alt="b.title_eng" width="297" height="298"/>
                                        </template>
                                        <template v-if="this.$parent.$parent.lang === 'ru'">
                                            <img :src="b.img" :alt="b.title_ru" width="297" height="298"/>
                                        </template>
                                    </router-link>
                                </div>
                                <div class="entry-block">
                                    <div class="entry-meta">
                                        <div class="post-date">
                                            <a href="#" title=""><i class="fa fa-calendar" aria-hidden="true"></i><span>{{ new Date(b.created_at).toLocaleDateString() }}</span></a>
                                        </div>
                                        <div class="post-admin">
                                            <i class="fa fa-user" aria-hidden="true"></i><span>by</span>{{ b.author }}
                                        </div>
                                        <div class="post-like">
                                            <template v-if="this.blog_likes === undefined">
                                                <a @click="this.blog_like(b.id)" title="Likes">
                                                    <i class="fa fa-heart-o" aria-hidden="true"></i><span>{{ b.likes }}</span>
                                                </a>
                                            </template>
                                        </div>
                                    </div>
                                    <template v-if="this.$parent.$parent.lang === 'eng'">
                                        <div class="entry-title">
                                            <router-link :to="{ name: 'front.blog.article', params: { id: b.id }}" :title="b.title_eng"><h3>{{ b.title_eng }}</h3></router-link>
                                        </div>
                                        <div class="entry-content">
                                            <p>{{ strippedContent(b.description_eng).substring(0, 200) + '...' }}</p>
                                        </div>
                                        <router-link :to="{ name: 'front.blog.article', params: { id: b.id }}" class="learn-more" title="Learn More">Learn More</router-link>
                                    </template>
                                    <template v-if="this.$parent.$parent.lang === 'ru'">
                                        <div class="entry-title">
                                            <router-link :to="{ name: 'front.blog.article', params: { id: b.id }}" :title="b.title_ru"><h3>{{ b.title_ru }}</h3></router-link>
                                        </div>
                                        <div class="entry-content">
                                            <p>{{ strippedContent(b.description_ru).substring(0, 200) + '...' }}</p>
                                        </div>
                                        <router-link :to="{ name: 'front.blog.article', params: { id: b.id }}" class="learn-more" title="Подробнее">Подробнее</router-link>
                                    </template>
                                </div>
                            </article>
                        </div>
                    </div>
                    <!-- Ow Pagination -->
                    <template v-if="last_page > 1">
                        <template v-if="this.$parent.$parent.lang === 'eng'">
                            <div class="ow-pagination">
                                <nav>
                                    <ul class="pager">
                                        <li class="page-prv"><template v-if="this.current_page === 1"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>Previous</template><template v-else><a @click="previous(this.current_page - 1)" title="Previous"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>Previous</a></template></li>
                                        <li>{{ this.current_page }}</li>
                                        <li class="page-next"><template v-if="this.current_page === this.last_page">Next<i class="fa fa-long-arrow-right" aria-hidden="true"></i></template><template v-else><a @click="next(this.current_page + 1)" title="Next">Next<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></template></li>
                                    </ul>
                                </nav>
                            </div>
                        </template>
                        <template v-if="this.$parent.$parent.lang === 'ru'">
                            <div class="ow-pagination">
                                <nav>
                                    <ul class="pager">
                                        <li class="page-prv"><template v-if="this.current_page === 1"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>Предыдущая</template><template v-else><a @click="previous(this.current_page - 1)" title="Previous"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>Предыдущая</a></template></li>
                                        <li>{{ this.current_page }}</li>
                                        <li class="page-next"><template v-if="this.current_page === this.last_page">Следующая<i class="fa fa-long-arrow-right" aria-hidden="true"></i></template><template v-else><a @click="next(this.current_page + 1)" title="Next">Следующая<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></template></li>
                                    </ul>
                                </nav>
                            </div>
                        </template>
                    </template>
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

export default {
    name: 'BlogPage',
    components: {RightSideBarBlog, Banners},
    data(){
        return{
            title:'Blog',
            links: null,
            countLinks:2,
            ing_url:'/front/images/banners/about-banner.jpg',
            blog: null,
            last_page: null,
            first_page: null,
            current_page: null,
            likes:null,
            blog_likes:null,
        }
    },
    mounted() {
        this.addLinks()
        this.getBlogInfo()
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
        },
        getBlogInfo(){
            axios.get('/api/front/blog')
                .then(res => {
                    this.blog = res.data.blog.data
                    this.last_page = res.data.blog.last_page
                    this.first_page = res.data.blog.first_page
                    this.current_page = res.data.blog.current_page
                    this.blog_likes = res.data.blog_likes.data
                })
        },
        previous(prev){
            axios.get('/api/front/blog?page=' + prev)
                .then(res => {
                    this.blog = res.data.blog.data
                    this.last_page = res.data.blog.last_page
                    this.first_page = res.data.blog.first_page
                    this.current_page = res.data.blog.current_page
                })
        },
        next(next){
            axios.get('/api/front/blog?page=' + next)
                .then(res => {
                    this.blog = res.data.blog.data
                    this.last_page = res.data.blog.last_page
                    this.first_page = res.data.blog.first_page
                    this.current_page = res.data.blog.current_page
                })
        },
        strippedContent(string){
            return string.replace(/<\/?[^>]+>/ig, " ");
        },
        blog_like(id){
            axios.post('/api/front/blog_likes/' + id)
                .then(res => {
                    let cmd = res.data.cmd
                    let message = res.data.message
                    alert(res.data)
                })
        },
    },
}
</script>
<style scoped>

</style>
