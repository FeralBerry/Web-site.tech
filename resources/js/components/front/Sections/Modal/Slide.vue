<template>
    <div class="container">
        <div class="row">
            <div class="modal-content">
                <div class="row">
                    <div class="col-md-12" >
                        <div class="col-md-8 col-xs-8" style="font-size: 20px">
                            <template v-if="price > 0">
                                <p style="margin: 0">Примерная стоимость от: <span v-html="price * 0.9 + ' ₽'"></span> <sup style="color: red" v-html="'<s>' + price + ' ₽</s>'"></sup></p>
                                <p style="margin: 0;font-size: 12px">Цена может быть уменьшена при личном общении.</p>
                            </template>
                        </div>
                        <div class="col-md-4 col-xs-4" style="text-align: right">
                            <a class="modal-close" @click="closeModal()">X</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <slide-content></slide-content>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import {defineComponent} from "vue";
import SlideContent from "@/Components/front/Sections/Modal/SlideContent.vue"
export default defineComponent({
    data(){
        return {
            price:0
        }
    },
    components: {SlideContent},
    mounted() {

    },
    watch:{
        '$route'(to,from) {

        },
    },
    methods:{
        closeModal(){
            this.price = 0;
            let q_1 = document.querySelectorAll('input[name="q_1"]')
            let q_10 = document.querySelectorAll('input[name="q_10"]')
            for (let radio of q_1) {
                if (radio.checked) {
                    radio.checked = false
                }
            }
            for (let radio of q_10) {
                if (radio.checked) {
                    radio.checked = false
                }
            }
            this.$parent.$parent.$parent.open_modal = false
        },
    }
})
</script>
<style scoped>
.modal-content{
    border-radius: 0;
    padding: 10px;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
}
.modal-close{
    text-decoration:none;
    color:red;
    padding: 10px;
    margin: 10px;
    font-size: 30px
}
.modal-close:hover{
    text-decoration:none;
    color:black;
    border: 1px solid #000;
}
@media (max-width:500px ) {
    .modal-content{
        border-radius: 0;
        height: 100vh;
        width: 100vw;
        padding: 10px;
        overflow-y: auto;
    }
}
</style>
