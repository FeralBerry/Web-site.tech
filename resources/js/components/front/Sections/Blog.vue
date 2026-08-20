<template>
    <section id="blog" class="block-section">
        <!-- TITLE PAGE -->
        <div class=" shape-bottom">
            <div class="bg-secondary block-title">
                <div class="container">
                    <h2 class="text-uppercase color-dark text-bold no-margin">Блог</h2>
                    <div class="title-icon"> <i class="fa fa-inbox"></i> </div>
                </div>
            </div>
        </div><!-- END TITLE PAGE -->
        <div class="block-page" >
            <div class="container-medium">
                <!-- FORM SEARCH-->
                <form class="box-widget">
                    <div class="input-group">
                        <input type="text" placeholder="Keywords" name="search"  class="form-control form-flat ">
                        <span class="input-group-btn">
                  <button class="btn primary-btn btn-flat-solid btn-icon " type="button"><i class="fa fa-search"></i></button>
                </span>
                    </div>
                </form><!-- END FORM SEARCH-->
                <ul class="list-unstyled list-blog">
                    <li v-for="(item,key) in this.blog">
                        <div class="clearfix box-blog">
                            <div class="blog-bg" :data-holdbg="asset('/base/blog/no-img.jpeg')" >
                                <img :src="asset('/base/blog/no-img.jpeg')" class="blog_main_img" :alt="item.title">
                                <div  class="blog-ic" v-html="item.type_img"></div>
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
                </ul>
                <div class="text-center" v-if="this.paginate !== null">
                    <ul class="pagination flat-pagination">
                        <template v-for="(item, key) in this.paginate.links">
                                <li v-if="item.active" class="active"><router-link @click="newBlog(item.page)" to="" v-html="item.label"></router-link></li>
                                <li v-else><router-link @click="newBlog(item.page)" to="" v-html="item.label"></router-link></li>
                        </template>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
import {defineComponent} from "vue";
import moment from "moment/moment.js";

export default defineComponent({
    data(){
        return {
            blog:null,
            paginate:null
        }
    },
    components: {},
    mounted() {
        this.getBlog()
    },
    methods:{
        getBlog(){
            axios.post('/api/blog')
                .then((res) => {
                    this.blog = res.data.data
                    if(res.data.last_page > 1){
                        this.paginate = res.data
                    }
                })
        },
        formatDate(date) {
            return moment(date).format('DD-MM-YYYY');
        },
        newBlog(page){
            if(page !== null){
                axios.post('/api/blog/page/' + page)
                    .then((res) => {
                        this.blog = res.data.data
                        if(res.data.last_page > 1){
                            this.paginate = res.data
                        }
                    })
            }
        }
    }
})
</script>
<style scoped>

</style>
