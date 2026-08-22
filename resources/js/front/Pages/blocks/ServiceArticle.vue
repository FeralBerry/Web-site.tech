<template>
    {{ this.article }}
</template>
<script>
export default {
    name:'ServicesArticle',
    data(){
        return{
            id: this.$route.params.id,
            article: null
        }
    },
    mounted() {
        this.getService()
    },
    methods:{
        getService(){
            axios.get('/api/front/service/' + this.$route.params.id)
                .then(res => {
                    this.article = res.data
                })
        }
    }
}
</script>
<style scoped>

</style>
