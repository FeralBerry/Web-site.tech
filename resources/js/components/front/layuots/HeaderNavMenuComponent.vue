<template>
    <div class="menu-block no-padding">
            <div class="container">
                <template v-if="this.$parent.$parent.successAuth === null">
                    <router-link to="/auth" class="user" title="User">
                        <i class="fa fa-user"></i>
                    </router-link>
                </template>
                <template v-else>
                    <router-link to="/user" class="user" title="User">
                        <i class="fa fa-user"></i>
                    </router-link>
                </template>
                <div class="menu-search">
                    <div id="sb-search" class="sb-search">
                        <form>
                            <input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search" />
                            <button class="sb-search-submit"><i class="fa fa-search"></i></button>
                            <span class="sb-icon-search"></span>
                        </form>
                    </div>
                </div>
                <div class="col-md-10 col-sm-12">
                    <nav class="navbar ow-navigation">
                        <div class="navbar-header">
                            <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a title="Logo" href="#" class="navbar-brand"><img :src="'/front/images/logo.png'" alt="Web Site Technology"/></a>
                        </div>
                        <div class="navbar-collapse collapse" id="navbar">
                            <HeaderMenu :header_links="header_links"/>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
</template>

<script>
import HeaderMenu from "@/components/front/layuots/HeaderNavSwitch/HeaderMenu.vue";
    export default {
        name: 'HeaderNavMenuComponent',
        mounted() {
            this.resizeNavMenu()
        },
        data(){
            return{
                header_links : {
                    home: {
                        name: 'Home',
                        url: {name: 'front.index'}
                    },
                    about: {
                        name: 'About',
                        url: {name:'front.about'}
                    },
                    services: {
                        name: 'Services',
                        url: {name:'front.services'}
                    },
                    copiesOfWork:{
                        dropMenu:{
                            name: 'Copies of work',
                            link: {
                                0: {
                                    name: 'All',
                                    url: {
                                        name: 'front.copies',
                                    }
                                },
                            }
                        }
                    },
                    lastNews:{
                        dropMenu: {
                            name:'News',
                            link:{
                                0:{
                                    name:'All',
                                    url:{
                                        name:'front.blog'
                                    }
                                },
                            }
                        }
                    },
                    contact:{
                        name:'Contact',
                        url:{name:'front.contact'}
                    }
                }
            }
        },
        components:{
            HeaderMenu,
        },
        methods:{
            changeHeaderLinks(lang){
                if(lang === 'rus'){
                    this.header_links.home.name = 'Главная'
                    this.header_links.about.name = 'Обо мне'
                    this.header_links.services.name = 'Услуги'
                    this.header_links.copiesOfWork.dropMenu.name = 'Работы'
                    this.header_links.copiesOfWork.dropMenu.link.name = 'Все'
                    this.header_links.lastNews.dropMenu.name = 'Новости'
                    this.header_links.lastNews.dropMenu.link.name = 'Все'
                    this.header_links.contact.name = 'Контакты'
                }
                if(lang === 'eng'){
                    this.header_links.home.name = 'Home'
                    this.header_links.about.name = 'About'
                    this.header_links.services.name = 'Services'
                    this.header_links.copiesOfWork.dropMenu.name = 'Copies of work'
                    this.header_links.copiesOfWork.dropMenu.link.name = 'All'
                    this.header_links.lastNews.dropMenu.name = 'News'
                    this.header_links.lastNews.dropMenu.link.name = 'All'
                    this.header_links.contact.name = 'Contact'
                }
            },
            resizeNavMenu(){
                if(window.innerWidth < 600){
                    document.getElementById('nav_menu').style.width = window.innerWidth
                }
                window.addEventListener("resize", function() {
                    if(window.innerWidth < 600){
                        document.getElementById('nav_menu').style.width = window.innerWidth
                    }
                });

            }
        }
    }
</script>
