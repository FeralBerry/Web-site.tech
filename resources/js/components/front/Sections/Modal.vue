<template>
    <transition name="bounce">
        <div class="modal" v-if="this.$parent.open_modal">
            <slide></slide>
        </div>
    </transition>
</template>
<script>
import {defineComponent} from "vue";
import Slide from "@/Components/front/Sections/Modal/Slide.vue"
export default defineComponent({
    data(){
        return {

        }
    },
    components: {Slide},
    mounted() {

    },
    watch:{
        '$route'(to,from) {

        },
    },
    methods:{

    }
})
</script>
<style scoped>
.modal{
    width: 100vw;
    height: 100vh;
    background-color: rgba(0, 0, 0, 0.3);
    padding: 30px;
    display: block;
}
@media (max-width: 500px) {
    .modal{
        padding: 0;
    }
}
.bounce-enter-active {
    animation: bounce-in 0.5s;
}
.bounce-leave-active {
    animation: bounce-in 0.5s reverse;
}
@keyframes bounce-in {
    0% {
        transform: scale(0);
    }
    50% {
        transform: scale(1.25);
    }
    100% {
        transform: scale(1);
    }
}
</style>
