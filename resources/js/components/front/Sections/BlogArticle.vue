<template>
    <!-- BLOG DETAIL -->
    <section id="blog" class="block-section">
        <div class=" shape-bottom">
            <div class="bg-secondary block-title">
                <div class="container">
                    <h2 class="text-uppercase color-dark text-bold no-margin">{{ this.blogTitle }}</h2>
                    <div class="title-icon"> <i class="fa fa-inbox"></i> </div>
                </div>
            </div>
        </div>


        <div class="block-page" >
            <div class="container-medium">
                <div class="row">
                    <div class="col-md-9">
                        <div class="blog-content">
                            <template v-for="(item,key) in this.blogArticle">
                                <img :src="asset('/base/blog/no-img.jpeg')" :alt="item.title" class="img-responsive">
                                <div class="white-space-20"></div>
                                <div class="post-meta font-alt">
                                    <span><i class="fa fa-calendar"></i> {{ formatDate(item.created_at) }}</span>
                                    <span><i class="fa fa-user"></i> {{ item.author }}</span>
                                    <span v-html="item.type_string"></span>
                                </div>
                                <p v-html="item.text"></p>
                            </template>
                        </div>
<!--
                        <div class="white-space-40"></div>
                        <h4 class="color-dark text-uppercase text-bold">Comments</h4>

                        <ol class="comments">
                            <li>
                                <div class="post-comment-block">
                                    <div class="img-thumbnail"> <img src="assets/theme/images/people/1.jpg" alt="avatar"> </div>
                                    <a href="#" class="btn btn-link btn-xs btn-flat-line pull-right">Reply</a>
                                    <h5 class="no-margin-bottom">Clara <small>says:</small></h5>
                                    <span class="meta-data">Just now</span>
                                    <div class="clearfix white-space-10"></div>
                                    <p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a.</p>
                                </div>
                            </li>
                            <li>
                                <div class="post-comment-block">
                                    <div class="img-thumbnail"> <img src="assets/theme/images/people/6.jpg" alt="avatar"> </div>
                                    <a href="#" class="btn  btn-link btn-xs btn-flat-line pull-right">Reply</a>
                                    <h5 class="no-margin-bottom ">Eno <small>says:</small></h5>
                                    <span class="meta-data">5 minutes ago</span>
                                    <div class="clearfix white-space-10"></div>
                                    <p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a.</p>
                                </div>
                                <ul>
                                    <li>
                                        <div class="post-comment-block">
                                            <div class="img-thumbnail"> <img src="assets/theme/images/people/5.jpg" alt="avatar"> </div>
                                            <a href="#" class="btn  btn-link btn-xs btn-flat-line pull-right">Reply</a>
                                            <h5 class="no-margin-bottom ">Katty <small>says:</small></h5>
                                            <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                                            <div class="clearfix white-space-10"></div>
                                            <p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-comment-block">
                                            <div class="img-thumbnail"> <img src="assets/theme/images/people/3.jpg" alt="avatar"> </div>
                                            <a href="#" class="btn  btn-link btn-xs btn-flat-line pull-right">Reply</a>
                                            <h5 class="no-margin-bottom ">Riani <small>says:</small></h5>
                                            <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                                            <div class="clearfix white-space-10"></div>
                                            <p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a.</p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="post-comment-block">
                                    <div class="img-thumbnail"> <img src="assets/theme/images/people/2.jpg" alt="avatar"> </div>
                                    <a href="#" class="btn  btn-link btn-xs btn-flat-line pull-right">Reply</a>
                                    <h5 class="no-margin-bottom ">Reno <small>says:</small></h5>
                                    <span class="meta-data">Nov 23, 2013 at 7:58 pm</span>
                                    <div class="clearfix white-space-10"></div>
                                    <p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a.</p>
                                </div>
                            </li>
                        </ol>
-->


                        <div class="white-space-30"></div>
                        <h4 class="color-dark text-uppercase text-bold">POST A COMMENT</h4>


<!--                        <form>
                            <div class="row">
                                <div class="col-md-4 ">
                                    <div class="form-group">
                                        <label>Your Name (*)</label>
                                        <input type="text" class="form-control form-flat" name="fullname">
                                    </div>
                                </div>
                                <div class="col-md-4 ">
                                    <div class="form-group">
                                        <label>Email (*)</label>
                                        <input type="email" class="form-control form-flat" name="email">
                                    </div>
                                </div>
                                <div class="col-md-4 ">

                                    <div class="form-group">
                                        <label>Website</label>
                                        <input type="email" class="form-control form-flat" name="website">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Your Comment (*)</label>
                                <textarea class="form-control form-flat" name="message" rows="8"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-flat-solid primary-btn">Submit Comment</button>
                            </div>
                        </form>-->

                        <div class="white-space-30"></div>
                    </div>
                    <div class="col-md-3">

                        <form class="box-widget">
                            <div class="input-group">
                                <input type="text" placeholder="Keywords" name="search"  class="form-control form-flat ">
                                <span class="input-group-btn">
                      <button class="btn primary-btn btn-flat-solid btn-icon " type="button"><i class="fa fa-search"></i></button>
                    </span>
                            </div>
                        </form>


                        <div class="box-widget">
                            <h5 class="color-dark text-bold text-uppercase">Categories</h5>
                            <ul class="list-category list-unstyled">
                                <li><a href="#">Web Design <span class="color-dark">(10)</span></a></li>
                                <li><a href="#">Wordpress <span class="color-dark">(2)</span></a></li>
                                <li><a href="#">Html/Css <span class="color-dark">(6)</span></a></li>
                                <li><a href="#">Branding <span class="color-dark">(20)</span></a></li>
                                <li><a href="#">Animation <span class="color-dark">(4)</span></a></li>
                            </ul>
                        </div>


                        <div class="box-widget">
                            <h5 class="color-dark text-bold text-uppercase">Popular tags</h5>
                            <ul class="list-tags list-unstyled">
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">Wordpress</a></li>
                                <li><a href="#">Html/Css</a></li>
                                <li><a href="#">Branding</a></li>
                                <li><a href="#">Animation</a></li>
                                <li><a href="#">Xcode</a></li>
                                <li><a href="#">Marketing</a></li>
                                <li><a href="#">Socials media</a></li>
                                <li><a href="#">Photography</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="parallax-bg white-light bg1">
            <div class="container">
                <div class="padding30 text-center relative">
                    <template v-if="curPage !== minPage">
                        <router-link :to="{name: 'front.blog.article', params:{id: prevPage}}" @click="changePage(prevPage)" class="btn btn-flat-line btn-default light-font btn-xs"><i class="fa fa-angle-left"></i>  PREV POST</router-link>
                    </template>
                    <span class="space-inline-15 hidden-xs"></span>
                    <template v-if="curPage !== maxPage">
                        <router-link :to="{name: 'front.blog.article', params:{id: nextPage}}" @click="changePage(nextPage)" class="btn btn-flat-line btn-default light-font btn-xs">NEXT POST <i class="fa fa-angle-right"></i> </router-link>
                    </template>
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
            blogArticle:null,
            blogTitle:null,
            maxPage:null,
            minPage:null,
            curPage:null,
            nextPage:null,
            prevPage:null,
        }
    },
    components: {},
    mounted() {
        this.getBlogArticle()
    },
    methods:{
        getBlogArticle(){
            axios.post('/api/blog/' + this.$route.params.id)
                .then((res) => {
                    this.blogArticle = res.data.blogArticle
                    this.blogTitle = res.data.blogArticle[0].title
                    this.curPage = res.data.blogArticle[0].id
                    this.maxPage = res.data.max
                    this.minPage = res.data.min
                    if(res.data.nextPage[0] !== undefined){
                        this.nextPage = res.data.nextPage[0].id
                    }
                    if(res.data.prevPage[0] !== undefined){
                        this.prevPage = res.data.prevPage[0].id
                    }
                })
        },
        changePage(id){
            axios.post('/api/blog/' + id)
                .then((res) => {
                    this.blogArticle = res.data.blogArticle
                    this.blogTitle = res.data.blogArticle[0].title
                    this.curPage = res.data.blogArticle[0].id
                    this.maxPage = res.data.max
                    this.minPage = res.data.min
                    if(res.data.nextPage[0] !== undefined){
                        this.nextPage = res.data.nextPage[0].id
                    }
                    if(res.data.prevPage[0] !== undefined){
                        this.prevPage = res.data.prevPage[0].id
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

</style>
