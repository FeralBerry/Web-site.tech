<template>
<transition name="quotes">
    <div v-if="index === this.currentQuotes" class="quotes_content">
            <template v-if="this.$parent.$parent.lang === 'eng'">
                <h3 class="block-title">
                    {{ quotes.author_eng }}
                </h3>
                <p>{{ quotes.text_eng }}</p>
            </template>
            <template v-if="this.$parent.$parent.lang === 'rus'">
                <h3 class="block-title">
                    {{ quotes.author_ru }}
                </h3>
                <p>{{ quotes.text_ru }}</p>
            </template>
    </div>
</transition>
</template>
<script>
export default {
    name:'FooterQuotes',
    data() {
        return {
            currentQuotes: 0,
        }
    },
    props:{
        quotes:{
            type:Object,
            required: true,
        },
        index:{
            required: true,
            type: Number
        },
        footerQuotesLength:{
            required: true,
            type: Number
        },
    },
    mounted() {
        this.nextQuotes()
    },
    methods:{
        nextQuotes(){
            setInterval(() => {
                this.currentQuotes++
                if(this.currentQuotes === this.footerQuotesLength){
                    this.currentQuotes = 0
                }
            }, 100000)
        },
    }
}
</script>
<style scoped>
.quotes-enter-from{
    opacity: 0
}
.quotes-enter-to{
    opacity: 1
}
.quotes-enter-active{
    transition: all ease 2s;
}
.quotes-leave-from{
    opacity: 1
}
.quotes-leave-to{
    opacity: 0
}
.quotes-leave-active{
    transition: all ease 3s;
}
.quotes_content{
    position: absolute;
    width: 100%;
}
</style>
