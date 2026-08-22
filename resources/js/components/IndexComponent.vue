<template>
    <modal></modal>
    <header-component></header-component>
    <router-view>

    </router-view>
    <footer-component></footer-component>
</template>
<script>

import {defineComponent} from "vue";
import HeaderComponent from "@/Components/front/Markup/HeaderComponent.vue";
import FooterComponent from "@/Components/front/Markup/FooterComponent.vue";
import Modal from "@/Components/front/Sections/Modal.vue";


export default defineComponent({
    data(){
        return {
            auth: false,
            open_modal: false,
            lang: navigator.language,
        }
    },
    components: {FooterComponent, HeaderComponent,Modal},
    mounted() {
        this.contentMenu()
    },
    watch:{
        '$route'(to,from) {

        },
    },
    methods:{
        checkAuth(){
            axios.post('/check_auth')
                .then((res) => {
                    this.auth = res.data !== 0;
                })
        },
        contentMenu(){
            document.onclick = hideMenu;
            document.oncontextmenu = rightClick;

            function hideMenu() {
                document.getElementById(
                    "contextMenu").style.display = "none"
            }
            function rightClick(e) {
                e.preventDefault();

                if (document.getElementById(
                    "contextMenu").style.display === "block")
                    hideMenu();
                else {
                    let menu = document
                        .getElementById("contextMenu")

                    menu.style.display = 'block';
                    menu.style.left = e.pageX + "px";
                    menu.style.top = e.pageY + "px";
                }
            }
        }
    }
})
</script>
<style>

</style>
