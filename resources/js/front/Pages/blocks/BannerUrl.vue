<template>
    <li v-if="Number(this.index) + 1 !== countLinks">
        <router-link :to="link.url">{{ link.title }}</router-link>
    </li>
    <li class="active" v-else>
        {{ link.title }}
    </li>
</template>
<script>
export default {
    name:'BannerUrl',
    props:{
        link:{
            type:Object,
            required:true
        },
        countLinks:{
            type:Number,
            required: true
        },
        index:{
            type:Number,
            required: true
        }
    },
}
</script>
<style scoped>

</style>
