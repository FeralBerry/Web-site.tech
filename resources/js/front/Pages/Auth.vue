<template>
<div>
    <banners :title="title" :count-links="countLinks" :img="countLinks" :links="links"></banners>
    <div class="section-padding"></div>
    <div class="container">
        <div class="row contact-form-section">
            <div class="col-md-6 col-sm-6">
                <div class="section-header" v-if="this.$parent.$parent.lang === 'eng'">
                    <h3>Login</h3>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <input type="email" name="login-email" class="form-control" id="login-email" placeholder="Your E-mail" required=""/>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <input type="password" name="login-password" class="form-control" id="login-password" placeholder="Password"/>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <a @click="login()" id="login_btn_submit" title="Send">Login</a>
                        </div>
                    </div>
                </div>
                <div class="section-header" v-if="this.$parent.$parent.lang === 'rus'">
                    <h3>Вход</h3>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <input type="email" name="login-email" class="form-control" id="login-email" placeholder="Ваш E-mail" required=""/>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <input type="password" name="login-password" class="form-control" id="login-password" placeholder="Пароль" required=""/>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <a @click="login()" id="login_btn_submit" title="Войти">Войти</a>
                        </div>
                    </div>
                </div>
                <div id="alert-msg" class="alert-msg"></div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="section-header">
                    <h3>Register</h3>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <input type="text" name="reg-name" class="form-control" id="reg-name" placeholder="Your Name*" required=""/>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <input type="email" name="reg-email" class="form-control" id="reg-email" placeholder="Your E-mail" required=""/>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <input type="text" name="reg-password" class="form-control" id="reg-password" placeholder="Password"/>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <input type="text" name="confirm-reg-password" class="form-control" id="confirm-reg-password" placeholder="Confirm Password"/>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <input type="submit" value="Register" id="reg_btn_submit" title="Send" name="post">
                    </div>
                </div>
                <div id="alert-msg" class="alert-msg"></div>
            </div>
        </div>
    </div>
    <div class="section-padding"></div>
</div>
</template>
<script>
import Banners from "@/front/Pages/blocks/Banners.vue";

export default {
    name: 'AuthPage',
    components: {Banners},
    data(){
        return{
            title: null,
            links: null,
            countLinks:2,
            ing_url:'/front/images/banners/about-banner.jpg'
        }
    },
    mounted() {
        this.addLinks()
    },
    methods:{
        addLinks(){
            if(this.$parent.$parent.lang === 'eng'){
                this.title = 'Login/Register'
                this.links = {
                    0: {
                        url: '/',
                        title:'Home'
                    },
                    1: {
                        url: '/auth',
                        title:'Login and Register'
                    }
                }
            }
            if(this.$parent.$parent.lang === 'rus'){
                this.title = 'Вход/Регистрация'
                this.links = {
                    0: {
                        url: '/',
                        title:'Главная'
                    },
                    1: {
                        url: '/auth',
                        title:'Вход и регистрация'
                    }
                }
            }
        },
        login(){
            axios.post('/api/front/login',
                {
                        email: document.getElementById('login-email').value,
                        password : document.getElementById('login-password').value
                }
            )
                .then(res => {
                    console.log(res.data)
                })
        }
    }
}
</script>
<style scoped>

</style>
