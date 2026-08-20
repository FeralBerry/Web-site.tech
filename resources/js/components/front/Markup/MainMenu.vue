<template>
    <div :class="menuClasses">
        <div class="toogle-bars">
            <a href="#menu-collapse" data-toggle="collapse" class="collapsed"><i class="fa fa-bars ic-open"></i> <i class="fa fa-remove ic-close"></i> Меню</a>
        </div>
        <div class="menu-collapse collapse" id="menu-collapse">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <ul class="breadcrumb main-nav no-space">
                            <li class="link-inpage"><a href="#contact" id="hireme-tab" class="link-inpage"><i class="fa fa-briefcase"></i> Наймите Меня прямо сейчас</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="breadcrumb main-nav nav" v-if="this.$parent.$parent.blankPage">
                            <li class="active"><a href="#home" class="link-inpage">Главная</a></li>
                            <li ><a href="#about" class="link-inpage">Обо мне</a></li>
                            <li ><a href="#resume" class="link-inpage">Резюме</a></li>
                            <li ><a href="#portfolio" class="link-inpage">Портфолио</a></li>
                            <li ><router-link :to="{name: 'front.blog'}" class="link-inpage">Блог</router-link></li>
                            <li ><a href="#contact" id="contact-tab" class="link-inpage">Контакты</a></li>
                        </ul>
                        <ul class="breadcrumb main-nav nav" v-else>
                            <li class="active"><router-link :to="{name: 'front.index'}" >Главная</router-link></li>
                            <li ><router-link :to="{name: 'front.index'}" >Портфолио</router-link></li>
                            <li ><router-link :to="{name: 'front.blog'}" >Блог</router-link></li>
                            <li ><router-link :to="{name: 'front.index'}" id="contact-tab" >Контакты</router-link></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="breadcrumb main-nav no-space">
                            <li>
                                <a href="https://vk.com/id758563528" title="VK"><i class="fa fa-vk"></i></a>
                            </li>
                            <li>
                                <a href="tel:+79687106270" title="Phone"><i class="fa fa-phone"></i></a>
                            </li>
                            <li>
                                <a href="mailto:admin@web-site.tech" title="Email"><i class="fa fa-envelope"></i></a>
                            </li>
                            <li>
                                <a href="https://t.me/Compas1990" title="Telegram"><i class="fa fa-telegram"></i></a>
                            </li>
                            <li>
                                <a href="https://github.com/FeralBerry" title="Github"><i class="fa fa-github"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End Main navbar -->
</template>
<script>
import {defineComponent} from "vue";
import {auto} from "@popperjs/core";
export default defineComponent({
    data(){
        return {
            menuClasses: {
                sticky: 'sticky-menu',
                menuArea: 'menu-area',
            }
        }
    },
    components: {},

    mounted() {
        window.addEventListener('scroll', this.handleScroll);
    },
    methods:{
        handleScroll() {
            const menuElement = this.$el;
            const scrollTop = window.scrollY;
            const menuOffsetTop = menuElement.offsetTop;

            if (scrollTop > menuOffsetTop) {
                menuElement.classList.add(this.menuClasses.sticky);
                menuElement.classList.add(this.menuClasses.menuArea);
                menuElement.style.bottom = auto;
            } else {
                menuElement.classList.remove(this.menuClasses.sticky);
                menuElement.classList.add(this.menuClasses.menuArea);
                menuElement.style.bottom = 0;
            }
        }
    }
})
</script>
<style scoped>
.sticky-menu {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000; /* Высокий z-index, чтобы меню перекрывало другой контент */
    background-color: #ebebeb;
}
</style>
