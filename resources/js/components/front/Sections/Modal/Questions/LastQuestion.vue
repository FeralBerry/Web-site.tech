<template>
    <h2 class="modal_title">Последнее уточнение, для связи?</h2>
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <form>
                <div class="form-group">
                    <label>Как к Вам обращаться (*)</label>
                    <input type="text" class="form-control form-flat" id="modal_name" required>
                </div>
                <div class="form-group">
                    <label>Email или телефон(*)</label>
                    <input type="text" class="form-control form-flat" id="modal_email" required>
                </div>
                <div class="form-group">
                    <label>Тематика и если етсь какие то особенные пожелания (*)</label>
                    <textarea class="form-control form-flat" rows="6" id="modal_message" required></textarea>
                </div>
                <div class="form-group">
                    <div class="preload-submit hidden"><hr/> <i class="fa fa-spinner fa-spin"></i> Пожалуйста подождите ...</div>
                    <div class="message-submit error hidden"></div>
                </div>
            </form>
        </div>
    </div>
    <a @click="this.sendMessage()" class="btn btn-flat-solid primary-btn">Отправить</a>
</template>
<script>
import {defineComponent} from "vue";

export default defineComponent({
    data(){
        return {

        }
    },
    components: {},
    mounted() {

    },
    watch:{
        '$route'(to,from) {

        },
    },
    methods:{
        sendMessage(){
            let modal_name = document.getElementById('modal_name').value
            let modal_email = document.getElementById('modal_email').value
            let modal_message = document.getElementById('modal_message').value
            this.$parent.$parent.lastSlide(modal_name,modal_email,modal_message)
        }
    }
})

</script>
<style scoped>

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
