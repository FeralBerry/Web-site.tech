<template>
    <!-- Latest News -->
    <div class="container-fluid latest-blog latest-blog-section no-padding">
        <div class="section-padding"></div>
        <div class="container">
            <div class="section-header">
                <template v-if="this.$parent.$parent.$parent.lang === 'eng'">
                    <h3>Latest project news</h3>
                    <span>Stay tuned so you don't miss out on something new.</span>
                </template>
                <template v-else-if="this.$parent.$parent.$parent.lang === 'rus'">
                    <h3>Последние повости проекта</h3>
                    <span>Следите за обновлениями чтобы не упустить что-то новое.</span>
                </template>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12" v-for="news in twoNews">
                    <template v-if="this.$parent.$parent.$parent.lang === 'eng'">
                        <article class="type-post">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="entry-cover">
                                    <template v-if="news.img != null">
                                        <router-link :to="{ name: 'front.blog.article', params: { id: news.id }}">
                                            <img :src="news.img" :alt="news.title_eng" width="267" height="358"/>
                                        </router-link>
                                    </template>
                                    <template v-else>
                                        <router-link :to="{ name: 'front.blog.article', params: { id: news.id }}">
                                            <img :src="'/logo-big-blue.png'" :alt="news.title_eng" width="267"/>
                                        </router-link>
                                    </template>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="entry-meta">
                                    <div class="post-date">
                                        <i class="fa fa-calendar" aria-hidden="true"></i><span>{{ new Date(news.created_at).toLocaleDateString() }}</span>
                                    </div>
                                    <div class="post-admin">
                                        <i class="fa fa-user" aria-hidden="true"></i><span>by</span>{{ news.author }}
                                    </div>
                                    <div class="post-like">
                                        <a @click="blog_likes(news.id)" title="Likes"><i class="fa fa-heart-o" aria-hidden="true"></i><span>{{ news.likes }}</span></a>
                                    </div>
                                </div>
                                <div class="entry-title">
                                    <router-link :to="{ name: 'front.blog.article', params: { id: news.id }}" :title="news.title_eng"><h3>{{ news.title_eng }}</h3></router-link>
                                </div>
                                <div class="entry-content">
                                    <p>{{ trimDesc(news.description_eng) }}</p>
                                </div>
                                <router-link :to="{ name: 'front.blog.article', params: { id: news.id }}" class="learn-more" title="Learn More">Learn More</router-link>
                            </div>
                        </article>
                    </template>
                    <template v-if="this.$parent.$parent.$parent.lang === 'rus'">
                        <article class="type-post">
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="entry-cover">
                                    <template v-if="news.img != null">
                                        <router-link :to="{ name: 'front.blog.article', params: { id: news.id }}">
                                            <img :src="news.img" :alt="news.title_ru" width="267" height="358"/>
                                        </router-link>
                                    </template>
                                    <template v-else>
                                        <router-link :to="{ name: 'front.blog.article', params: { id: news.id }}">
                                            <img :src="'/logo-big-blue.png'" :alt="news.title_ru" width="267"/>
                                        </router-link>
                                    </template>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div class="entry-meta">
                                    <div class="post-date">
                                        <i class="fa fa-calendar" aria-hidden="true"></i><span>{{ new Date(news.created_at).toLocaleDateString() }}</span>
                                    </div>
                                    <div class="post-admin">
                                        <i class="fa fa-user" aria-hidden="true"></i><span>от</span> {{ news.author }}
                                    </div>
                                    <div class="post-like">
                                        <a @click="blog_likes(news.id)" title="Likes"><i class="fa fa-heart-o" aria-hidden="true"></i><span>{{ news.likes }}</span></a>
                                    </div>
                                </div>
                                <div class="entry-title">
                                    <router-link :to="{ name: 'front.blog.article', params: { id: news.id }}" :title="news.title_ru"><h3>{{ news.title_ru }}</h3></router-link>
                                </div>
                                <div class="entry-content">
                                    <p>{{ trimDesc(news.description_ru) }}</p>
                                </div>
                                <router-link :to="{ name: 'front.blog.article', params: { id: news.id }}" class="learn-more" title="Подробнее">Подробнее</router-link>
                            </div>
                        </article>
                    </template>
                </div>
            </div>
        </div>
        <div class="section-padding"></div>
    </div><!-- Latest News /- -->
</template>
<script>
export default {
    name:'MainBlog',
    data(){
        return{
            twoNews:null
        }
    },
    mounted() {
        this.getTwoLastNews()
    },
    methods:{
        getTwoLastNews(){
            axios.get('/api/front/get-last-two-news')
                .then(res => {
                    this.twoNews = res.data
                })
        },
        trimDesc(string){
            if(string != null){
                string = string.replace(/<\/?[^>]+(>|$)/g, "");
                return string.slice(0,150)
            }
        },
        blog_likes(id){
            axios.post('/api/front/blog_likes/' + id)
                .then(res => {
                    alert(res.data)
                })
        }
    }
}
</script>
<style scoped>

</style>
