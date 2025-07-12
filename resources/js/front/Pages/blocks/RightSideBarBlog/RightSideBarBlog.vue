<template>
    <div class="col-md-3 col-sm-6 widget-area">
        <search/>
        <categories/>
        <last-news/>
        <tags/>
    </div>
</template>
<script>


import Search from "@/front/Pages/blocks/RightSideBarBlog/Search.vue";
import Categories from "@/front/Pages/blocks/RightSideBarBlog/Categories.vue";
import LastNews from "@/front/Pages/blocks/RightSideBarBlog/LastNews.vue";
import Tags from "@/front/Pages/blocks/RightSideBarBlog/Tags.vue";

export default {
    name:"RightSideBarBlog",
    components: {Search,Categories,LastNews,Tags},
    data(){
        return{

        }
    },
    mounted() {


    },
    methods:{


    }
}
</script>
<style scoped>

</style>
