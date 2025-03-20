<template>
        <template v-if="this.auth === null">
            <template v-if="this.lang === 'eng'">
                <router-link to="/auth" title="Register now">Register Now</router-link>
            </template>
            <template v-if="this.lang === 'rus'">
                <router-link to="/auth" title="Зарегистрироваться">Зарегистрироваться</router-link>
            </template>
        </template>
        <template v-else>
            <template v-if="this.lang === 'eng'">
                <router-link to="/user" title="Personal account">Personal account</router-link>
            </template>
            <template v-if="this.lang === 'rus'">
                <router-link to="/user" title="В личный кабинет">В личный кабинет</router-link>
            </template>
        </template>
</template>
<script>
export default {
    name: 'SliderButton',
    data(){
        return{
            lang: this.$parent.$parent.$parent.$parent.$parent.$parent.lang,
            auth: this.$parent.$parent.$parent.$parent.$parent.$parent.successAuth
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
