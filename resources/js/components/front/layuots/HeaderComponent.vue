<template>
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
                    <div class="col-md-4 col-sm-4 col-xs-6 register">
                        <template v-if="this.$parent.successAuth === null">
                            <template v-if="this.$parent.lang === 'eng'">
                                <router-link to="/auth" title="Login/Register">Login/Register</router-link>
                            </template>
                            <template v-if="this.$parent.lang === 'rus'">
                                <router-link to="/auth" title="Вход/Регистрация">Вход/Регистрация</router-link>
                            </template>
                        </template>
                        <template v-else>
                            <router-link to="/user" :title="this.$parent.successAuth.name">{{ this.$parent.successAuth.name }}</router-link>
                        </template>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 logo-block">
                        <router-link to="/" title="Logo">
                            <img :src="'/logo-big-blue.png'" alt="Web Site Technology" width="120" height="80"/>
                        </router-link>
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
            }
        }
    }
</script>
