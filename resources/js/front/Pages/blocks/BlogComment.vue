<template>
    <div class="post-comment">
        <template v-if="count_comment === 0">
            <h3>Ещё нет комментариев, будь первым!</h3>
        </template>
        <template v-else>
            <template v-if="this.$parent.$parent.$parent.lang === 'eng'">
                <h3><span>{{ count_comment }}</span> Comments</h3>
            </template>
            <template v-if="this.$parent.$parent.$parent.lang === 'rus'">
                <h3><span>{{ count_comment }}</span> Комментарии</h3>
            </template>
        </template>
        <template v-if="blog_comment !== null">
            <div class="media" v-for="(b,index) in this.blog_comment">
                <div class="media-left">
                    <a href="#" :title="b.name">
                        <template v-if="b.img === null">
                            <img :alt="b.name" :src="'/front/images/comment1.jpg'" class="media-object" width="97" height="97"/>
                        </template>
                        <template v-else>
                            <img :alt="b.name" :src="b.img" class="media-object" width="97" height="97"/>
                        </template>
                    </a>
                </div>
                <div class="media-body">
                    <div class="media-content">
                        <h4 class="media-heading">
                            {{ b.name }}<span>{{ new Date(b.created_at).toLocaleDateString() }}</span>
                        </h4>
                        <p>{{ b.text }}</p>
                    </div>
                </div>
            </div>
        </template>
        <template v-if="last_page > 1">
            <template v-if="this.$parent.$parent.$parent.lang === 'eng'">
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
            <template v-if="this.$parent.$parent.$parent.lang === 'rus'">
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
    <template v-if="this.user_id !== ''">
        <form class="comment-form" id="comment-form" @submit.prevent="sendComment();" method="POST" :action="'/api/front/blog/add_comment/' + this.$route.params.id">
            <template v-if="this.$parent.$parent.$parent.lang === 'eng'">
                <div class="row">
                    <div class="form-group col-md-12">
                        <textarea id="blog_comment" name="blog_comment" placeholder="Your Comment*" rows="8" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn-send" title="Submit Comment">Submit Comment</button>
                </div>
            </template>
            <template v-if="this.$parent.$parent.$parent.lang === 'rus'">
                <div class="row">
                    <div class="form-group col-md-12">
                        <textarea id="blog_comment" name="blog_comment" placeholder="Ваш коммент*" rows="8" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn-send" title="Отправить">Отправить</button>
                </div>
            </template>
        </form>
    </template>
</template>
<script>

export default {
    name:"BlogComment",
    components: {},
    data(){
        return{
            count_comment: null,
            blog_comment:null,
            last_page: null,
            first_page: null,
            current_page: null,
            user_id:document.querySelector('meta[name="user_id"]').content
        }
    },

    mounted() {
        this.getComments()
    },
    methods:{
        getComments(){
            axios.post('/api/front/blog/comments/' + this.$route.params.id)
                .then(res => {
                    this.count_comment = res.data.data.length
                    this.blog_comment = res.data.data
                    this.last_page = res.data.last_page
                    this.first_page = res.data.first_page
                    this.current_page = res.data.current_page
                })
        },
        previous(prev){
            axios.post('/api/front/blog/comments/' + this.$route.params.id +'?page=' + prev)
                .then(res => {
                    this.blog_comment = res.data.data
                    this.last_page = res.data.blog.last_page
                    this.first_page = res.data.blog.first_page
                    this.current_page = res.data.blog.current_page
                })
        },
        next(next){
            axios.post('/api/front/blog/comments/' + this.$route.params.id +'?page=' + next)
                .then(res => {
                    this.blog_comment = res.data.data
                    this.last_page = res.data.blog.last_page
                    this.first_page = res.data.blog.first_page
                    this.current_page = res.data.blog.current_page
                })
        },
        sendComment(){
            axios.post('/api/front/blog/add_comment/' + this.$route.params.id,{
                text:document.getElementById('blog_comment').value,
                user_id:this.$parent.$parent.$parent.successAuth[0].id
            })
                .then(res => {
                    console.log(res)
                    this.getComments()
                })
        }
    }
}
</script>
<style scoped>
.btn-send{
    margin-top: 20px;
    position: relative;
    padding: 14px 29px;
    text-decoration: none;
    background-color: #ff6400;
    border: 1px solid transparent;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 1.56px;
    color: #fff;
    display: inline-block;
    z-index: 3;
}
.btn-send::before {
    position: absolute;
    content: "";
    background: #052f6d;
    height: 0;
    left: 50%;
    top: 50%;
    -webkit-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -ms-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
    width: 103%;
    transition: all 0.3s ease 0s;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    z-index: -1;
}
.btn-send:hover {
    color: #ffe373;
}
.btn-send:hover::before {
    height: 75%;
}
</style>
