<template>
    <banners :title="this.title" :links="this.links" :countLinks="this.countLinks" :img="this.img_url" :key="this.$parent.$parent.bannerKey"/>
    <div class="container-fulid no-padding contactus">
        <div class="section-padding"></div>
        <div class="container">
            <div class="row">
                <div class="contactus-info-block">
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="contactinfo-box ">
                            <span class="icon"><i class="fa fa-telegram" style="font-size: 60px"></i></span>
                            <div class="infobox">
                                <template v-if="this.$parent.$parent.lang === 'eng'">
                                    <h3>Join my telegram channel</h3>
                                    <a href="tel:+01123456789" title="01123456789">+01 123 456 789</a>
                                </template>
                                <template v-else-if="this.$parent.$parent.lang === 'rus'">
                                    <h3>присоединяйтесь к моему каналу телеграмму</h3>
                                    <a href="tel:+01123456789" title="01123456789">+01 123 456 789</a>
                                </template>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="contactinfo-box">
                            <span class="icon icon-Phone2"></span>
                            <div class="infobox">
                                <template v-if="this.$parent.$parent.lang === 'eng'">
                                    <h3>Give me a call.</h3>
                                    <a href="tel:+01123456789" title="01123456789">+01 123 456 789</a>
                                </template>
                                <template v-else-if="this.$parent.$parent.lang === 'rus'">
                                    <h3>Позвоните мне</h3>
                                    <a href="tel:+01123456789" title="01123456789">+01 123 456 789</a>
                                </template>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="contactinfo-box">
                            <span class="icon icon-Mail"></span>
                            <div class="infobox">
                                <template v-if="this.$parent.$parent.lang === 'eng'">
                                    <h3>Send me a message.</h3>
                                    <a href="mailto:Info@OurDomain.com" title="01123456789">+01 123 456 789</a>
                                </template>
                                <template v-else-if="this.$parent.$parent.lang === 'rus'">
                                    <h3>Напишите мне сообщение.</h3>
                                    <a href="mailto:Info@OurDomain.com" title="01123456789">+01 123 456 789</a>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row contact-form-section">
                <div class="col-md-8 col-sm-8">
                    <div class="section-header">
                        <template v-if="this.$parent.$parent.lang === 'eng'">
                            <h3>Write a message for feedback</h3>
                            <span>Leave your contact details and briefly describe what you are interested in and I will contact you soon.</span>
                        </template>
                        <template v-else-if="this.$parent.$parent.lang === 'rus'">
                            <h3>Написать сообщение для обратной связи</h3>
                            <span>Оставьт е свои контакты и кратко что Вас интересует и я скоро свяжусь с Вами</span>
                        </template>
                    </div>
                    <template v-if="this.$parent.$parent.lang === 'eng'">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="input_name" maxlength="100" placeholder="Your Name*" required=""/>
                                <div id="alert-msg-name" class="alert-msg"></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="input_phone" maxlength="30" placeholder="Phone" required=""/>
                                <div id="alert-msg-phone" class="alert-msg"></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <input type="email" class="form-control" id="input_email" maxlength="100" placeholder="Your E-mail" required=""/>
                                <div id="alert-msg-email" class="alert-msg"></div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <textarea rows="6" class="form-control" id="input_message" placeholder="Message"></textarea>
                                <div id="alert-msg-message" class="alert-msg"></div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <a @click.prevent="this.sendFeedbackForm()" class="btn-send" title="Send">Send</a>
                            </div>
                        </div>
                        <div id="alert-msg" class="alert-msg"></div>
                    </template>
                    <template v-else-if="this.$parent.$parent.lang === 'rus'">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="input_name" placeholder="Ваше имя*" required=""/>
                                <div id="alert-msg-name" class="alert-msg"></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="input_phone" placeholder="Телефон" required=""/>
                                <div id="alert-msg-phone" class="alert-msg"></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <input type="email" class="form-control" id="input_email" placeholder="Ваш E-mail" required=""/>
                                <div id="alert-msg-email" class="alert-msg"></div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <textarea rows="6" class="form-control" id="input_message" placeholder="Сообщение"></textarea>
                                <div id="alert-msg-message" class="alert-msg"></div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <a @click.prevent="this.sendFeedbackForm()" class="btn-send" title="Отправить">Отправить</a>
                            </div>
                        </div>
                        <div id="alert-msg" class="alert-msg"></div>
                    </template>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="slider-content-box">
                        <div class="col-md-12 col-sm-12 col-xs-6 no-padding">
                            <h3 class="slider-title">Beats all you've ever saw been in trouble with the law</h3>
                            <span>January 03-07</span>
                            <p>09, Design Street, New York, NY- 10001, United States </p>
                        </div>
                        <div class="slider-author col-md-12 col-sm-12 col-xs-6 no-padding">
                            <img :src="asset('/front/images/slider-thumb1.jpg')" alt="slider-thumb" width="74" height="74"/>
                            <h3>Daniel lesner<span>Public Speaker</span></h3>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-6 no-padding">
                            <a href="#" title="Register now">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-padding"></div>
    </div>

</template>
<script>
import Banners from "@/front/Pages/blocks/Banners.vue";

export default {
    name: 'ContactPage',
    components: {Banners},
    data(){
        return {
            title:'',
            links: null,
            countLinks:2,
            img_url:'/front/images/banners/about-banner.jpg',
            telegram:'',
        }
    },
    mounted() {

    },
    methods:{
        addLinks(){
            if(this.$parent.$parent.lang === 'eng'){
                this.links = {
                    0: {
                        url: '/',
                        title:'Home'
                    },
                    1: {
                        url: '/contact',
                        title:'Contact'
                    },
                }
                this.title = 'Contact'
            } else if(this.$parent.$parent.lang === 'rus'){
                this.links = {
                    0: {
                        url: '/',
                        title:'Главная'
                    },
                    1: {
                        url: '/blog',
                        title:'Контакты'
                    },
                }
                this.title = 'Контакты'
            }
        },
        sendFeedbackForm(){
            let name = document.getElementById('input_name').value
            let phone = document.getElementById('input_phone').value
            let email = document.getElementById('input_email').value
            let message = document.getElementById('input_message').value
            let lang = this.$parent.$parent.$parent.lang
            let alert_msg_name = document.getElementById('alert-msg-name')
            let alert_msg_phone = document.getElementById('alert-msg-phone')
            let alert_msg_email = document.getElementById('alert-msg-email')
            let alert_msg_message = document.getElementById('alert-msg-message')
            let checkName = false,
                checkPhone = false,
                checkEmailLength = false,
                checkEmail = false,
                checkMessage = false
            if(name.length < 3 && name.length > 100){
                if(lang === 'rus'){
                    alert_msg_name.innerHTML = "Длинна имени доинее должна быть больше 2 символов."
                }
                if(lang === 'eng'){
                    alert_msg_name.innerHTML = "The name length must be more than 2 characters."
                }
                setTimeout(() => {
                    alert_msg_name.innerHTML = ""
                }, 3000)
            } else {
                checkName = true
            }
            if(phone.length < 6 && phone.length > 30){
                if(lang === 'rus'){
                    alert_msg_phone.innerHTML = "Длинна телефона должна быть больше 6 символов."
                }
                if(lang === 'eng'){
                    alert_msg_phone.innerHTML = "The phone length must be more than 6 characters."
                }
                setTimeout(() => {
                    alert_msg_phone.innerHTML = ""
                }, 3000)
            } else {
                checkPhone = true
            }
            if(email.length < 6 && email.length > 100){
                if(lang === 'rus'){
                    alert_msg_email.innerHTML = "Длинна емаил должна быть больше 6 символов."
                }
                if(lang === 'eng'){
                    alert_msg_email.innerHTML = "The email length must be more than 6 characters."
                }
                setTimeout(() => {
                    alert_msg_email.innerHTML = ""
                }, 3000)
            } else {
                checkEmailLength = true
            }
            if(email.indexOf('@') === -1){
                if(lang === 'rus'){
                    alert_msg_email.innerHTML = "Введен не емаил."
                }
                if(lang === 'eng'){
                    alert_msg_email.innerHTML = "Email not entered."
                }
                setTimeout(() => {
                    alert_msg_email.innerHTML = ""
                }, 3000)
            } else {
                checkEmail = true
            }
            if(message.length < 10 && message.length > 5000){
                if(lang === 'rus'){
                    alert_msg_message.innerHTML = "Сообщение не введено или короче 10 символов."
                }
                if(lang === 'eng'){
                    alert_msg_message.innerHTML = "Message not entered or shorter than 10 characters."
                }
                setTimeout(() => {
                    alert_msg_message.innerHTML = ""
                }, 3000)
            } else {
                checkMessage = true
            }
            if(checkName && checkPhone && checkEmailLength && checkEmail && checkMessage){
                checkName = false
                checkPhone = false
                checkEmailLength = false
                checkEmail = false
                checkMessage = false
                axios.post('/api/front/app-for-dev',{
                    'name': name,
                    'email': email,
                    'phone': phone,
                    'message': message,
                })
                    .then(res => {
                        let msg;
                        if(lang === 'rus'){
                            msg = res.data.msg_ru
                        }
                        if(lang === 'eng'){
                            msg = res.data.msg_eng
                        }
                        if(res.data.error){
                            alert(msg)
                        } else {
                            alert(msg)
                        }
                    })
            }
        }
    }
}
</script>
<style scoped>
.btn-send{
    position: relative;
    padding: 14px 29px;
    text-decoration: none;
    background-color: #ff6400;
    border: 1px solid transparent;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 1.56px;
    color: #fff;
    display: inline-block;
    z-index: 3;
}
.btn-send::before {
    position: absolute;
    content: "";
    background: #052f6d;
    height: 0;
    left: 50%;
    top: 50%;
    -webkit-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -ms-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
    width: 103%;
    transition: all 0.3s ease 0s;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    z-index: -1;
}
.btn-send:hover {
    color: #ffe373;
}
.btn-send:hover::before {
    height: 75%;
}
.alert-msg{
    color: #ff6400;
}
</style>
