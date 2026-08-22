<template>
    <section id="blog" class="block-section">
        <!--BLOG TITLE-->
        <div class=" shape-bottom">
            <div class="bg-secondary block-title">
                <div class="container">
                    <h2 class="text-uppercase color-dark text-bold no-margin">Блог</h2>
                    <div class="title-icon"> <i class="fa fa-comments-o"></i> </div>
                </div>
            </div>
        </div><!--END BLOG TITLE-->

        <div class="block-page">
            <div class="container-medium">
                <!--LIST BLOG-->
                <ul class="list-unstyled list-blog">
                    <template v-for="(item,key) in this.blog">
                        <li>
                            <div class="clearfix box-blog">
                                <div class="blog-bg" :data-holdbg="'\\base\\blog\\no-img.jpeg'">
                                    <img :src="'/base/blog/no-img.jpeg'" class="blog_main_img" :alt="item.title">
                                    <div class="blog-ic" v-html="item.type_img"></div>
                                </div>
                                <div class="blog-content">
                                    <h5 class="text-uppercase color-dark text-bold">{{ item.title }}</h5>
                                    <div class="post-meta font-alt">
                                        <span><i class="fa fa-calendar"></i> {{ formatDate(item.created_at) }}</span>
                                        <span><i class="fa fa-user"></i> {{ item.author }}</span>
                                        <span v-html="item.type_string"></span>
                                    </div>
                                    <p v-html="item.text.replace(/<\/?[^>]+(>|$)/g, '').slice(0,200)"></p>
                                    <router-link :to="{name: 'front.blog.article', params:{id: item.id}}" class="btn btn-xs btn-flat-solid primary-btn">Читать подробнее</router-link>
                                </div>
                            </div>
                        </li>
                    </template>
                </ul>
                <!--BTN SHOW MORE-->
                <div class="box-btn-more" v-if="this.maxBlog">
                    <a @click="addMoreBlog" class="btn btn-flat-line btn-link" id="more-blog"> Показать еще</a>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
import {defineComponent} from "vue";
import moment from "moment";
export default defineComponent({
    data(){
        return {
            blog:null,
            maxBlog:true,
        }
    },
    components: {},
    mounted() {
        this.getMainBlog()
    },
    methods:{
        getMainBlog(){
            let data = {
                count:0
            };
            axios.post('/api/main/blog',data)
                .then((res) => {
                    this.blog = res.data.data
                    if (res.data.current_page === res.data.last_page){
                        this.maxBlog = false
                    }
                })
        },
        addMoreBlog(){
            let data = {
                count:this.blog.length
            }
            axios.post('/api/main/blog', data)
                .then((res) => {
                    this.blog = res.data.data
                    if (res.data.current_page === res.data.last_page){
                        this.maxBlog = false
                    }
                })
        },
        formatDate(date) {
            return moment(date).format('DD-MM-YYYY');
        }
    }
})
</script>
<style scoped>
.blog_main_img{
    width: 100%;
    min-height: 300px;
}
.box-blog{
    min-height: 300px;
}
</style>
