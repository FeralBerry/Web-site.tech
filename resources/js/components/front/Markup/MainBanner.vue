<template>
    <header class="main-header no-window" id="home">
        <div class="content-table header-content-fixed " >
            <div class="whoim">
                <div class="box-line text-uppercase text-bold">
                    Кто Я
                </div>
            </div>
            <div class="v-content">
                <div class="container">
                    <h1 class="text-uppercase color-dark name">Меня зовут Павел, и я</h1>
                    <h4 class="text-uppercase color-dark font-alt job"><span id="typed" class="typed"></span></h4><br>
                    <template v-if="this.route_name === 'front.index'">
                        <a href="#contact" class="btn btn-flat-solid primary-btn link-inpage">Написать мне</a>&nbsp;&nbsp;&nbsp;
                        <a @click="openModal()" class="btn btn-flat-solid primary-btn">Пройти опрос</a>
                    </template>
                    <template v-else>
                        <router-link :to="{name:'front.contact'}" class="btn btn-flat-solid primary-btn link-inpage">Написать мне</router-link>&nbsp;&nbsp;&nbsp;
                        <a @click="openModal()" class="btn btn-flat-solid primary-btn">Пройти опрос</a>
                    </template>
                </div>
            </div>
        </div>
        <main-menu></main-menu>
    </header>
</template>
<script>
import {defineComponent} from "vue";
import MainMenu from "@/Components/front/Markup/MainMenu.vue";
export default defineComponent({
    data(){
        return {
            route_name:null,
        }
    },
    components: {MainMenu},
    watch:{
        '$route'(to,from){
            this.route_name = this.$route.name
        }
    },
    mounted() {

    },
    methods:{
        openModal(){
            this.$parent.$parent.open_modal = true
        }
    }
})
</script>
<style scoped>

</style>
