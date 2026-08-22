<template>

    <router-view>

    </router-view>

</template>

<style scoped>

</style>
<script>
export default {
    name: 'IndexComponent',
    data() {
        return {
            lang: null,
            successAuth: null,
        }
    },
    components: {

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
