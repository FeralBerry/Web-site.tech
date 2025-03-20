<template>
    <div>
        <div class="container">
            <div class="footer-menu">
                <!-- Copyrights -->
                <div class="copyrights ow-pull-left">
                    <template v-if="this.$parent.$parent.lang === 'eng'">
                        <p>&copy; 2020-{{ getYear() }} | All rights reserved</p>
                    </template>
                    <template v-if="this.$parent.$parent.lang === 'rus'">
                        <p>&copy; 2020-{{ getYear() }} | Все права защищены</p>
                    </template>
                </div><!-- Copyrights /- -->
                <!-- Navigation -->
                <nav class="navbar ow-navigation ow-pull-right">
                    <div class="navbar-header">
                        <button aria-controls="navbar" aria-expanded="false" data-target="#navbar2" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse" id="navbar2">
                        <ul class="nav navbar-nav">
                            <template v-if="this.$parent.$parent.lang === 'eng'">
                                <li><router-link title="Home" to="/">Home</router-link></li>
                                <li><router-link title="About Us" to="/about">About Us</router-link></li>
                                <li><router-link title="Services" to="/services">Services</router-link></li>
                                <li><router-link title="Latest News" to="/blog">Latest News</router-link></li>
                                <li><router-link title="Copies of works" to="/copies">Copies of works</router-link></li>
                                <li><router-link title="Contact" to="/contact">Contact</router-link></li>
                            </template>
                            <template v-if="this.$parent.$parent.lang === 'rus'">
                                <li><router-link title="Главная" to="/">Главная</router-link></li>
                                <li><router-link title="Обо мне" to="/about">Обо мне</router-link></li>
                                <li><router-link title="Услуги" to="/services">Услуги</router-link></li>
                                <li><router-link title="Новости" to="/blog">Новости</router-link></li>
                                <li><router-link title="Работы" to="/copies">Работы</router-link></li>
                                <li><router-link title="Контакты" to="/contact">Контакты</router-link></li>
                            </template>
                        </ul>
                    </div>
                </nav><!-- Navigation /- -->
            </div><!-- Footer Menu /- -->
        </div><!-- Container /- -->
    </div>
</template>

<script>
    export default {
        name: 'FooterNavMenuComponent',
        methods:{
            getYear(){
                return new Date().getFullYear()
            }
        },
        mounted() {

        }
    }
</script>
