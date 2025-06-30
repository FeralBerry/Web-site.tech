<template>
<div>
    {{ article }}
</div>
</template>
<script>
export default {
    name: 'BlogArticle',
    data(){
        return{
            article:null
        }
    },
    mounted() {
        this.getArticleInfo()
    },
    methods:{
        getArticleInfo(){
            axios.get('/api/front/blog/' + this.$route.params.id)
                .then(res => {
                    this.article = res.data
                })
        },
    }
}
</script>
<style scoped>

</style>
