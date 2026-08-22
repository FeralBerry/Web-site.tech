<template>
    <h2 class="modal_title">Какие доработки на сайте планируются?</h2>
    <div class="row">
        <div class="col-md-12 margin-answer">
            <label>
                <input type="checkbox" name="q_10" value="1" @click="designPriceUpdate()"/>
                <div class="btn btn-sık">
                    <span>Дизайн</span>
                </div>
            </label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 margin-answer">
            <label>
                <input type="checkbox" name="q_10" value="2" @click="htmlPriceUpdate()"/>
                <div class="btn btn-sık">
                    <span>Верстка (изменение структуры блоков сайта)</span>
                </div>
            </label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 margin-answer">
            <label>
                <input type="checkbox" name="q_10" value="3" @click="phpPriceUpdate()"/>
                <div class="btn btn-sık">
                    <span>Программирование (добавление функционала сайта)</span>
                </div>
            </label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 margin-answer">
            <label>
                <input type="checkbox" name="q_10" value="4" @click="seoPriceUpdate()"/>
                <div class="btn btn-sık">
                    <span>Оптимизация для работы поисковых систем</span>
                </div>
            </label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 margin-answer">
            <label>
                <input type="checkbox" name="q_10" value="5" @click="marketPriceUpdate()"/>
                <div class="btn btn-sık">
                    <span>Настройка рекламы</span>
                </div>
            </label>
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
            design: false,
            html:false,
            php:false,
            seo:false,
            market:false
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
        designPriceUpdate(){
            if(this.design){
                this.design = false
                this.$parent.$parent.$parent.price = this.$parent.$parent.$parent.price - 20000
            } else {
                this.design = true
                this.$parent.$parent.$parent.price = this.$parent.$parent.$parent.price + 20000
            }
        },
        htmlPriceUpdate(){
            if(this.html){
                this.html = false
                this.$parent.$parent.$parent.price = this.$parent.$parent.$parent.price - 40000
            } else {
                this.html = true
                this.$parent.$parent.$parent.price = this.$parent.$parent.$parent.price + 40000
            }
        },
        phpPriceUpdate(){
            if(this.php){
                this.php = false
                this.$parent.$parent.$parent.price = this.$parent.$parent.$parent.price - 60000
            } else {
                this.php = true
                this.$parent.$parent.$parent.price = this.$parent.$parent.$parent.price + 60000
            }
        },
        seoPriceUpdate(){
            if(this.seo){
                this.seo = false
                this.$parent.$parent.$parent.price = this.$parent.$parent.$parent.price - 30000
            } else {
                this.seo = true
                this.$parent.$parent.$parent.price = this.$parent.$parent.$parent.price + 30000
            }
        },
        marketPriceUpdate(){
            if(this.market){
                this.market = false
                this.$parent.$parent.$parent.price = this.$parent.$parent.$parent.price - 20000
            } else {
                this.market = true
                this.$parent.$parent.$parent.price = this.$parent.$parent.$parent.price + 20000
            }
        },
        nextPage(){
            let radios = document.querySelectorAll('input[name="q_10"]')
            let hasChecked = false;
            let pic = '';
            for (let radio of radios) {
                if (radio.checked) {
                    hasChecked = true
                    if(radio.value === '1'){
                        pic += 'Дизайн\\n'
                    } else if(radio.value === '2'){
                        pic += 'Верстка (изменение структуры блоков сайта)\\n'
                    } else if(radio.value === '3'){
                        pic += 'Программирование (добавление функционала сайта)\\n'
                    } else if(radio.value === '4'){
                        pic += 'Оптимизация для работы поисковых систем\\n'
                    } else if(radio.value === '5'){
                        pic += 'Настройка рекламы\\n'
                    }
                }
            }
            this.$parent.$parent.q_10 = pic
            this.$parent.$parent.modal_page = '11'
            if(!hasChecked){
                let alert_page = document.getElementById('alert_page_10')
                alert_page.style.display = 'block'
                setTimeout(() => {
                    alert_page.style.display = 'none'
                },3000)
            }
            let q_10 = document.getElementById('q_10')
            q_10.style.position = 'absolute'
            setTimeout(() => {
                q_10.style.position = 'relative'
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
