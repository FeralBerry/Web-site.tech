<template>
        <ul class="nav navbar-nav menubar" id="header_nav">
            <li><router-link :title="this.header_links.home.name" :to="this.header_links.home.url">{{ this.header_links.home.name }}</router-link></li>
            <li><router-link :title="this.header_links.about.name" :to="this.header_links.about.url">{{ this.header_links.about.name }}</router-link></li>
            <li><router-link :title="this.header_links.services.name" :to="this.header_links.services.url">{{ this.header_links.services.name }}</router-link></li>
            <li><router-link :title="this.header_links.services.name" :to="this.header_links.copiesOfWork.url">{{ this.header_links.copiesOfWork.name }}</router-link></li>
            <li><router-link :title="this.header_links.services.name" :to="this.header_links.lastNews.url">{{ this.header_links.lastNews.name }}</router-link></li>
            <li><router-link :title="this.header_links.contact.name" :to="this.header_links.contact.url">{{ this.header_links.contact.name }}</router-link></li>
        </ul>
</template>
<script>
export default {
    name:'HeaderMenu',
    props:{
        header_links:{
            required:true,
            type:Object
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
