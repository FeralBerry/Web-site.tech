<template>
    <div v-if="this.article !== null">
        {{ this.article }}
    </div>
    <div v-else>
        {{ 'нет такого материала' }}
    </div>
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
            axios.get('/api/front/example/' + this.$route.params.id)
                .then(res => {
                    this.article = res.data
                })
        }
    }
}
</script>
<style scoped>

</style>
