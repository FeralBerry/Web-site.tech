<template>
    <main-banner></main-banner>
</template>
<script>
import {defineComponent} from "vue";

import MainBanner from "@/Components/front/Markup/MainBanner.vue";

export default defineComponent({
    data(){
        return {
            blankPage:true
        }
    },
    watch: {
        $route (to,from) {
            this.blankPage = to.href === '/';
        }
    },
    components: {MainBanner},
    mounted() {

    },
    methods:{

    }
})
</script>
<style scoped>

</style>
