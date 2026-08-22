<template>
    <transition name="modal-slide">
        <template v-if="this.modal_page === '0'">
            <div id="q_0" class="col-md-8 col-xs-12 modal-block">
                <Question_0></Question_0>
            </div>

        </template>
        <template  v-if="this.modal_page === '10'">
            <div id="q_10" class="col-md-8 col-xs-12 modal-block">
                <Question_10></Question_10>
            </div>
        </template>
        <template  v-if="this.modal_page === '20'">
            <div id="q_20" class="col-md-8 col-xs-12 modal-block">
                <Question_20></Question_20>
            </div>
        </template>
        <template v-if="this.modal_page === '30'">
            <div id="q_30" class="col-md-8 col-xs-12 modal-block">
                <Question_30></Question_30>
            </div>
        </template>
        <template v-if="
        this.modal_page === '11' ||
        this.modal_page === '12' ||
        this.modal_page === '13' ||
        this.modal_page === '14' ||
        this.modal_page === '15' ||
        this.modal_page === '21' ||
        this.modal_page === '22' ||
        this.modal_page === '23' ||
        this.modal_page === '24' ||
        this.modal_page === '25' ||
        this.modal_page === '31' ||
        this.modal_page === '32' ||
        this.modal_page === '33' ||
        this.modal_page === '34' ||
        this.modal_page === '35'
">
            <div id="q_1000" class="col-md-8 col-xs-12 modal-block">
                <last-question></last-question>
            </div>
        </template>
    </transition>
    <div class="col-md-4 col-xs-12 modal-right-block">
        <p style="padding-bottom: 20px; font-size: 18px">
            Проходя этот опрос вы экономите моё и своё время
        </p>
        <img :src="'/base/projectImg/quiz.png'" alt="" style="width: 100%">
        <p style="padding-bottom: 20px; font-size: 18px">
            По окончании опроса вы получите скидку на работу в <span style="color: red;">10%</span>, примерную цену проекта и скидку на аудит бизнеса за <span style="color: red;">50%</span> стоимости.<br>
        </p>
    </div>
</template>
<script >
import {defineComponent} from "vue";
import Question_0 from "@/Components/front/Sections/Modal/Questions/Question_0.vue"
import Question_10 from "@/Components/front/Sections/Modal/Questions/Question_10.vue"
import Question_20 from "@/Components/front/Sections/Modal/Questions/Question_20.vue"
import Question_30 from "@/Components/front/Sections/Modal/Questions/Question_30.vue"
import LastQuestion from "@/Components/front/Sections/Modal/Questions/LastQuestion.vue"
export default defineComponent({
    data(){
        return {
            q_1:null,
            q_10:null,
            q_20:null,
            q_30:null,
            modal_page:'0',
        }
    },
    components: {Question_0,Question_10,Question_20,Question_30,LastQuestion},
    mounted() {

    },
    watch:{
        '$route'(to,from) {

        },
    },
    methods:{
        lastSlide(name, email, message){
            this.modal_page = '0'
            this.$parent.closeModal()
            let data = {
                name:name,
                email:email,
                message:message,
                q_1:this.q_1,
                q_10:this.q_10,
                q_20:this.q_20,
                q_30:this.q_30,
                price:this.$parent.price
            }
            axios.post('/api/modal',data).then((res) => {
                alert("Ваша заявка успешно отправлена скоро с Вами свяжусь.")
            })

        }
    }
})
</script>
<style scoped>
.modal-block{
    left: 0;
    position: absolute;
    border: 1px solid #323232;
    height: 100%;
    margin-left: 10px;
    margin-right: 15px;
    width: calc(66.666666% - 15px);
    padding: 10px;
}
.modal-right-block{
    text-align: center;
    right: 0;
    border: 1px solid #323232;
    height: calc(100% - 70px);
    margin-right: 10px;
    width: calc(33.333333% - 15px);
    padding: 10px;
    margin-left: 66.66%;
}
@media (max-width: 500px) {
    .modal-block{
        position: relative;
        border: none;
        width: 100%;
    }
    .modal-right-block{
        border: none;
        margin-top: 20px;
        width: 100%;
        margin-left: 0;
    }
}
.modal-slide-enter-active,
.modal-slide-leave-active {
    transition: all 0.3s ease-in-out;
}

.modal-slide-enter-from{
    transform: translateX(30px);
    opacity: 0;
}
.modal-slide-leave-to {
    transform: translateX(30px);
    opacity: 0;
}


label {
    position: relative;
    display: inline-block;
    text-align: center;
}

.btn:hover {
    cursor: pointer !important;
}

.btn:active {
    box-shadow: 0 1px #666 !important;
    transform: translateY(2px) !important;
}
.btn {
    font-size: 15px;
    font-weight: bold;
    box-shadow: 0 3px #999;
    text-align: center;
}
.btn-sık {
    transition: all 0.2s ease;
    color:#fff;
    background-color: #323232 ;
    border: 2px solid #323232 !important;
    box-shadow: 0 3px #323232 !important;
    min-width: 150px;
}


btn-sık::selection{
    background: #ef5350;
}

input[type="radio"] {
    position: absolute;
    visibility: hidden;
}
input[type="radio"] + div {
    position: relative;
}
input[type="radio"]:checked + div {
    background-color: #fff;
}
input[type="radio"]:checked + div>span {
    color: #323232;
}
input[type="radio"] + div>span {
    position: relative;
    top: 25%;}

input[type="checkbox"] {
    position: absolute;
    visibility: hidden;
}

input[type="checkbox"] + div {
    position: relative;
}
input[type="checkbox"]:checked + div {
    background-color: #fff;
}
input[type="checkbox"]:checked + div>span {
    color: #323232;
}
input[type="checkbox"] + div>span {
    position: relative;
    top: 25%;}

input[type="checkbox"]:checked + div::before {
    content:"✔";
    position: absolute;
    bottom: 18px;
    right: 0px;
    font-size: 21px;
    color: #00d12f;
}

input[type="radio"]:checked + div::before {
    font-family: FontAwesome;
    content: "\f08d";
    position: absolute;
    bottom: 31px;
    font-size: 21px;
    color: #00d12f;
    right: -5px;
    -webkit-transform: rotate(30deg);
    -moz-transform: rotate(30deg);
    -o-transform: rotate(30deg);
    -ms-transform: rotate(30deg);
    transform: rotate(30deg);
    animation: fall 0.5s forwards;
}

@keyframes fall {
    100% {
        -webkit-transform: translate(-5px,5px) rotate(30deg);
        -moz-transform: translate(-5px,5px) rotate(30deg);
        -o-transform: translate(-5px,5px) rotate(30deg);
        -ms-transform: translate(-5px,5px) rotate(30deg);
        transform: translate(-5px,5px) rotate(30deg);
    }
}

@-moz-keyframes fall {
    100% {
        -webkit-transform: translate(-5px,5px) rotate(30deg);
        -moz-transform: translate(-5px,5px) rotate(30deg);
        -o-transform: translate(-5px,5px) rotate(30deg);
        -ms-transform: translate(-5px,5px) rotate(30deg);
        transform: translate(-5px,5px) rotate(30deg);
    }
}

@-webkit-keyframes fall {
    100% {
        -webkit-transform: translate(-5px,5px) rotate(30deg);
        -moz-transform: translate(-5px,5px) rotate(30deg);
        -o-transform: translate(-5px,5px) rotate(30deg);
        -ms-transform: translate(-5px,5px) rotate(30deg);
        transform: translate(-5px,5px) rotate(30deg);
    }
}
.margin-answer{
    padding-bottom: 10px;
}
.alert_page_0{
    color:red;
    font-size: 20px;
}
</style>
