<template>
    <h2 class="modal_title">У Вас уже есть действующий бизнес или только планируете начать?</h2>
    <div class="row">
        <div class="col-md-12 margin-answer">
            <label>
                <input type="radio" name="q_1" value="10">
                <div class="btn btn-sık">
                    <span>Да действующий безнес и есть свой сайт</span>
                </div>
            </label>
        </div>
        <div class="col-md-12 margin-answer">
            <label>
                <input type="radio" name="q_1" value="20">
                <div class="btn btn-sık">
                    <span>Да действующий безнес, но нужен сайт</span>
                </div>
            </label>
        </div>
        <div class="col-md-12 margin-answer">
            <label>
                <input type="radio" name="q_1" value="30">
                <div class="btn btn-sık">
                    <span>Нет действующего бизнеса, но нужен сайт для старта</span>
                </div>
            </label>
        </div>
    </div>
    <p class="alert_page_0" style="display: none" id="alert_page_0">Вы не выбрали ни 1 варианта</p>
    <a @click="this.nextPage()" class="btn btn-flat-solid primary-btn">Следующий ворпрос</a>
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
        nextPage(){
            let radios = document.querySelectorAll('input[name="q_1"]')
            let hasChecked = false;
            for (let radio of radios) {
                if (radio.checked) {
                    hasChecked = true
                    let q_1 = document.querySelector('input[name="q_1"]:checked').value
                    if(q_1 === '10'){
                        this.$parent.$parent.q_1 = 'Да действующий безнес и есть свой сайт'
                    } else if(q_1 === '20'){
                        this.$parent.$parent.q_1 = 'Да действующий безнес, но нужен сайт'
                    } else if(q_1 === '30'){
                        this.$parent.$parent.q_1 = 'Нет действующего бизнеса, но нужен сайт для старта'
                    }
                    this.$parent.$parent.modal_page = q_1
                }
            }
            if(!hasChecked){
                let alert_page = document.getElementById('alert_page_0')
                alert_page.style.display = 'block'
                setTimeout(() => {
                    alert_page.style.display = 'none'
                },3000)
            }
            let q_0 = document.getElementById('q_0')
            q_0.style.position = 'absolute'
            setTimeout(() => {
                q_0.style.position = 'relative'
            },500)
        },
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
