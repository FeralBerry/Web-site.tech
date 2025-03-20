<template>
        <ul class="nav navbar-nav menubar" id="header_nav">
            <li><router-link :title="this.header_links.home.name" :to="this.header_links.home.url">{{ this.header_links.home.name }}</router-link></li>
            <li><router-link :title="this.header_links.about.name" :to="this.header_links.about.url">{{ this.header_links.about.name }}</router-link></li>
            <li><router-link :title="this.header_links.services.name" :to="this.header_links.services.url">{{ this.header_links.services.name }}</router-link></li>
            <li class="dropdown">
                <a aria-expanded="false" aria-haspopup="true" role="button" class="dropdown-toggle" :title="this.header_links.copiesOfWork.dropMenu.name" href="#">{{ this.header_links.copiesOfWork.dropMenu.name }}</a>
                <i class="ddl-switch fa fa-angle-down"></i>
                <ul class="dropdown-menu">
                    <li v-for="(item, index) in this.header_links.copiesOfWork.dropMenu.link" :key="index">
                        <router-link :title="item.name" :to="item.url">{{ item.name }}</router-link>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a aria-expanded="false" aria-haspopup="true" role="button" class="dropdown-toggle" :title="this.header_links.lastNews.dropMenu.name" href="#">{{ this.header_links.lastNews.dropMenu.name }}</a>
                <i class="ddl-switch fa fa-angle-down"></i>
                <ul class="dropdown-menu">
                    <li v-for="(item, index) in this.header_links.lastNews.dropMenu.link" :key="index">
                        <router-link :title="item.name" :to="item.url">{{ item.name }}</router-link>
                    </li>
                </ul>
            </li>
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
