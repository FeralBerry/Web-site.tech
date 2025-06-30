<template>
    <div class="remodal" data-remodal-id="modal">
        <button data-remodal-action="close" class="remodal-close"></button>
        <div id="modal_body">

        </div>
        <br>
        <button data-remodal-action="cancel" class="remodal-cancel">Отменить</button>
        <button data-remodal-action="confirm" class="remodal-confirm">Сохранить</button>
    </div>
        <!-- Header -->
    <header class="header-main container-fluid no-padding">
        <!-- Top Header -->
        <div class="top-header container-fluid no-padding">
            <!-- Container -->
            <div class="container">
                <div class="row">
                    <!-- Social -->
                    <div class="col-md-4 col-sm-4 col-xs-6 social">
                        <ul>
                            <li><a title="lang_button" @click.prevent="changeLanguage()" id="lang_button" style="text-decoration: none">EN</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 logo-block">
                        <router-link to="/" title="Logo">
                            <img :src="'/logo-big-blue.png'" alt="Web Site Technology" width="120" height="80"/>
                        </router-link>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6 register">
                        <template v-if="this.$parent.successAuth === null">
                            <template v-if="this.$parent.lang === 'eng'">
                                <a @click="loginModal()" title="Login" style="margin: 5px" data-remodal-target="modal">Login</a>
                                <a @click="registerModal()" title="Register" data-remodal-target="modal">Register</a>
                            </template>
                            <template v-if="this.$parent.lang === 'rus'">
                                <a @click="loginModal()" title="Вход" style="margin: 5px" data-remodal-target="modal">Вход</a>
                                <a @click="registerModal()" title="Регистрация" data-remodal-target="modal">Регистрация</a>
                            </template>
                        </template>
                        <template v-else>
                            <router-link to="/user" :title="this.$parent.successAuth.name">{{ this.$parent.successAuth.name }}</router-link>
                        </template>
                    </div>
                </div>
            </div>
        </div>
        <HeaderNavMenuComponent ref="headerNavMenuComponent"/>
    </header>
</template>

<script>
    import HeaderNavMenuComponent from "@/components/front/layuots/HeaderNavMenuComponent.vue";
    export default {
        name: 'HeaderComponent',
        components: {
            HeaderNavMenuComponent
        },
        mounted() {

        },
        methods:{
            changeLanguage(){
                if(this.$parent.lang === 'eng'){
                    this.$parent.lang = 'rus'
                    document.getElementById('lang_button').innerHTML = 'RU'
                    this.$refs.headerNavMenuComponent.changeHeaderLinks(this.$parent.lang)
                } else {
                    this.$parent.lang = 'eng'
                    document.getElementById('lang_button').innerHTML = 'EN'
                    this.$refs.headerNavMenuComponent.changeHeaderLinks(this.$parent.lang)
                }
            },
            loginModal(){
                let html
                const csrf = document.querySelector('meta[name="csrf-token"]').content
                if(this.$parent.lang === 'eng'){
                    html = '<form method="POST" action="/login">\n' +
                        '       <input type="hidden" name="_token" value="' + csrf + '" />\n' +
                        '                        <div class="row mb-3">\n' +
                        '                            <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>\n' +
                        '                            <div class="col-md-6">\n' +
                        '                                <input id="email" type="email" class="form-control" name="email" required autocomplete="email" autofocus>\n' +
                        '                            </div>\n' +
                        '                        </div>\n' +
                        '                        <div class="row mb-3">\n' +
                        '                            <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>\n' +
                        '                            <div class="col-md-6">\n' +
                        '                                <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">\n' +
                        '                            </div>\n' +
                        '                        </div>\n' +
                        '                        <div class="row mb-0">\n' +
                        '                            <div class="col-md-8 offset-md-4">\n' +
                        '                                <button type="submit" class="btn btn-primary">\n' +
                        '                                    Login \n' +
                        '                                </button>\n' +
                        '                            </div>\n' +
                        '                        </div>\n' +
                        '                    </form>'
                }
                if(this.$parent.lang === 'rus'){
                    html = '<form method="POST" action="/login">\n' +
                        '       <input type="hidden" name="_token" value="' + csrf + '" />\n' +
                        '                        <div class="row mb-3">\n' +
                        '                            <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>\n' +
                        '                            <div class="col-md-6">\n' +
                        '                                <input id="email" type="email" class="form-control" name="email" required autocomplete="email" autofocus>\n' +
                        '                            </div>\n' +
                        '                        </div>\n' +
                        '                        <div class="row mb-3">\n' +
                        '                            <label for="password" class="col-md-4 col-form-label text-md-end">Пароль</label>\n' +
                        '                            <div class="col-md-6">\n' +
                        '                                <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">\n' +
                        '                            </div>\n' +
                        '                        </div>\n' +
                        '                        <div class="row mb-0">\n' +
                        '                            <div class="col-md-8 offset-md-4">\n' +
                        '                                <button type="submit" class="btn btn-primary">\n' +
                        '                                    Войти \n' +
                        '                                </button>\n' +
                        '                            </div>\n' +
                        '                        </div>\n' +
                        '                    </form>'
                }
                document.getElementById('modal_body').innerHTML = html
            },
            registerModal(){
                let html
                const csrf = document.querySelector('meta[name="csrf-token"]').content
                if(this.$parent.lang === 'eng'){
                    html = '<form method="POST" action="/register">\n' +
                        '       <input type="hidden" name="_token" value="' + csrf + '" />\n' +
                        '                        <div class="row mb-3">\n' +
                        '                            <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>\n' +
                        '                            <div class="col-md-6">\n' +
                        '                                <input id="name" type="text" class="form-control" name="name" required autocomplete="name" autofocus>\n' +
                        '                            </div>\n' +
                        '                        </div>\n' +
                        '                        <div class="row mb-3">\n' +
                        '                            <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>\n' +
                        '                            <div class="col-md-6">\n' +
                        '                                <input id="email" type="email" class="form-control" name="email" required autocomplete="email">\n' +
                        '                            </div>\n' +
                        '                        </div>\n' +
                        '                        <div class="row mb-3">\n' +
                        '                            <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>\n' +
                        '                            <div class="col-md-6">\n' +
                        '                                <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">\n' +
                        '                            </div>\n' +
                        '                        </div>\n' +
                        '                        <div class="row mb-3">\n' +
                        '                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Confirm Password</label>\n' +
                        '                            <div class="col-md-6">\n' +
                        '                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">\n' +
                        '                            </div>\n' +
                        '                        </div>\n' +
                        '                        <div class="row mb-0">\n' +
                        '                            <div class="col-md-6 offset-md-4">\n' +
                        '                                <button type="submit" class="btn btn-primary">Register</button>\n' +
                        '                            </div>\n' +
                        '                        </div>\n' +
                        '                    </form>\n' +
                        '                </div>\n' +
                        '            </div>\n' +
                        '        </div>\n' +
                        '    </div>\n' +
                        '</div>'
                }
                if(this.$parent.lang === 'rus'){
                    html = ''
                }
                document.getElementById('modal_body').innerHTML = html
            }
        }
    }
</script>
