<template>
    <!-- ABOUT ME -->
    <main-about></main-about>
    <!-- RESUME -->
    <resume></resume>
    <!--PORTFOLIO-->
    <main-portfolio></main-portfolio>
    <!--BLOG-->
    <main-blog></main-blog>
    <!--CONTACT-->
    <contact></contact>
</template>
<script type="module">
import {defineComponent} from "vue";
import Contact from "@/Components/front/Sections/Contact.vue"
import MainBlog from "@/Components/front/Sections/MainBlog.vue"
import MainPortfolio from "@/Components/front/Sections/MainPortfolio.vue"
import Resume from "@/Components/front/Sections/Resume.vue"
import MainAbout from "@/Components/front/Sections/MainAbout.vue"
/*window.Echo.channel('posts')
    .listen('.create', (data) => {
        document.getElementById('mess').innerHTML = data.message
        console.log('Order status updated: ', data);
    });*/
export default defineComponent({
    components: {Contact,MainBlog,MainPortfolio,Resume,MainAbout},
    mounted() {

    },
    methods:{
        /*sendEvent(){
            axios.post('/posts',
                {}
            ).then(() => {
                console.log('post send')
            });
        }*/
    }
})
</script>
<style scoped>

</style>
