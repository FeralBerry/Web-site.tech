<template>
    <h2 class="modal_title">Какого типа сайт Вам нужен?</h2>
    <div class="row">
        <div class="col-md-12 margin-answer">
            <div class="col-md-6">
                <label>
                    <input type="radio" name="q_30" value="1" @click="this.vizitkaPriceUpdate()"/>
                    <div class="btn btn-sık">
                        <span>Визитка</span>
                    </div>
                </label>
            </div>
            <p>(Вывод контактов и базовой информации о товаре/услуге)</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 margin-answer">
            <div class="col-md-6">
                <label>
                    <input type="radio" name="q_30" value="2" @click="this.one_pagePriceUpdate()" />
                    <div class="btn btn-sık">
                        <span>Одностраничный</span>
                    </div>
                </label>
            </div>
            <p>(визитка + возможность оставить заявку с сайта)</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 margin-answer">
            <div class="col-md-6">
                <label>
                    <input type="radio" name="q_30" value="3" @click="this.many_pagePriceUpdate()"/>
                    <div class="btn btn-sık">
                        <span>Многостраничный</span>
                    </div>
                </label>
            </div>
            <p>(имеет несколько страниц Главная/О компании/Контакты)</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 margin-answer">
            <div class="col-md-6">
                <label>
                    <input type="radio" name="q_30" value="4" @click="this.corpPriceUpdate()"/>
                    <div class="btn btn-sık">
                        <span>Корпоративный</span>
                    </div>
                </label>
            </div>
            <p>(один из прошлых вариантов с внутренним функционалом)</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 margin-answer">
            <div class="col-md-6">
                <label>
                    <input type="radio" name="q_30" value="5" @click="this.shopPriceUpdate()"/>
                    <div class="btn btn-sık">
                        <span>Магазин</span>
                    </div>
                </label>
            </div>
            <p>(Корпаративный с привязкой кассы и/или сторонних API)</p>
        </div>
    </div>
    <p class="alert_page_10" style="display: none" id="alert_page_10">Вы не выбрали ни 1 варианта</p>
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
        vizitkaPriceUpdate(){
            this.$parent.$parent.$parent.price = 25000
        },
        one_pagePriceUpdate(){
            this.$parent.$parent.$parent.price = 40000
        },
        many_pagePriceUpdate(){
            this.$parent.$parent.$parent.price = 70000
        },
        corpPriceUpdate(){
            this.$parent.$parent.$parent.price = 100000
        },
        shopPriceUpdate(){
            this.$parent.$parent.$parent.price = 150000
        },
        nextPage(){
            let radios = document.querySelectorAll('input[name="q_30"]')
            let hasChecked = false;
            for (let radio of radios) {
                if (radio.checked) {
                    hasChecked = true
                    let q_30 = document.querySelector('input[name="q_30"]:checked').value
                    if(q_30 === '1'){
                        this.$parent.$parent.q_10 = 'Визитка (Вывод контактов и базовой информации о товаре/услуге)'
                    } else if(q_30 === '2'){
                        this.$parent.$parent.q_10 = 'Одностраничный (визитка + возможность оставить заявку с сайта)'
                    } else if(q_30 === '3'){
                        this.$parent.$parent.q_10 = 'Многостраничный'
                    } else if(q_30 === '4'){
                        this.$parent.$parent.q_10 = 'Корпоративный (визитка/одностраничный/многостраничный с добавлением внутреннего функционала)'
                    } else if(q_30 === '5'){
                        this.$parent.$parent.q_10 = 'Магазин (Корпаративный с привязкой кассы и/или сторонних API)'
                    }
                    this.$parent.$parent.modal_page = '3' + q_30
                }
            }
            if(!hasChecked){
                let alert_page = document.getElementById('alert_page_10')
                alert_page.style.display = 'block'
                setTimeout(() => {
                    alert_page.style.display = 'none'
                },3000)
            }
            let q_30 = document.getElementById('q_30')
            q_30.style.position = 'absolute'
            setTimeout(() => {
                q_30.style.position = 'relative'
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
.alert_page_10{
    color:red;
    font-size: 20px;
}
</style>
