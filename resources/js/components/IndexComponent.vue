<template>
    <HeaderComponent/>
    <router-view>

    </router-view>
    <FooterComponent/>
</template>

<style scoped>

</style>
<script>
import HeaderComponent from "./front/layuots/HeaderComponent.vue";
import FooterComponent from "./front/layuots/FooterComponent.vue";

export default {
    name: 'IndexComponent',
    data() {
        return {
            lang: null,
            successAuth: null,
        }
    },
    components: {
        HeaderComponent,
        FooterComponent
    },
    mounted() {

    },
    methods: {
        setCookie: function() {
            if(this.lang == null){
                this.lang = 'eng'
            }
            if(Cookies.get('location') == null){
                Cookies.set('location', this.lang, { expires: 7 })
            }
        },
    },
    beforeMount() {
        this.setCookie()
    },
}
</script>
