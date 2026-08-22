<template>
    <section id="about" class="block-section">
        <div class="clearfix my-profile">
            <div class="my-pict" >
                <div class="overfly">
                    <div class="text-botttom">
                        <h2 class="text-uppercase color-dark text-bold">Павел Комаров</h2>
                        <!--<h5 class="text-uppercase color-dark font-alt ">Из живущих на Земле</h5>-->
                    </div>
                </div>
            </div>
            <div class="my-desc">
                <div class="bg-secondary clearfix">
                    <div class="inner-text">
                        <h3 class=" color-dark no-margin-top">Привет!</h3>
                        <p>Еще с 2011 года я занимаюсь веб разработкой, начинал с верстки готовых дизанерских сайтов.
                        В 2012 году научился создавать дизайн сайта под заказ, но мне этого было мало.
                            И в 2014 году открыл для себя язык программировани PHP, а вместе с ним
                            фреймворк Laravel и CMS WordPress. С тех пор я постоянно совершенствую
                            свои навыки в веб дизайне, верстке и программировании. Сейчас почти в совершенистве владею
                        HTML, CSS, JS, PHP и многими фреймворкам на этих языках.</p>
                        <p class="no-margin">В 2022 добавил к своим навыкам работу с языком программирования Java
                            и работу с Telegram ботами.</p>
                    </div>
                </div>
                <div class="bg-dark clearfix">
                    <div class="inner-text">
                        <p class="no-margin color-light ">
                            <strong class="fix-width-100"><i class="fa fa-telegram margin-right-5"></i> Телеграм</strong> : <a class="about-links" href="https://t.me/Compas1990">https://t.me/Compas1990</a><br/>
                            <strong class="fix-width-100"><i class="fa fa-telegram margin-right-5"></i> ТГ(группа)</strong> : <a class="about-links" href="https://t.me/+8kYP68Ng44w5MTIy">https://t.me/+8kYP68Ng44w5MTIy</a><br/>
                            <strong class="fix-width-100"><i class="fa fa-vk margin-right-5"></i> VK</strong> : <a class="about-links" href="https://vk.com/id758563528">https://vk.com/id758563528</a><br/>
                            <strong class="fix-width-100"><i class="fa fa-phone margin-right-5"></i> Телефон</strong> : <a class="about-links" href="tel:+79687106270">+ 7(968)710-62-70</a><br/>
                            <strong class="fix-width-100"><i class="fa fa-envelope margin-right-5"></i> Емаил</strong> : <a class="about-links" href="mailto:admin@web-site.tech">admin@web-site.tech</a><br/>
                            <strong class="fix-width-100"><i class="fa fa-globe margin-right-5"></i> Сайт</strong> : <a class="about-links" href="javascript:void(0);" @click="copyLink()" id="web_site_link">https://web-site.tech</a><br/>
                            <strong class="fix-width-100"><i class="fa fa fa-github margin-right-5"></i> GitHub</strong> : <a class="about-links" href="https://github.com/FeralBerry">https://github.com/FeralBerry</a><br/>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- SERVICES-->
        <div class="container">
            <ul class="services list-unstyled clearfix">
                <li class="col-sm-4 no-padding">
                    <div class="box">
                        <div class="ic"><i class="fa fa-code"></i></div>
                        <h5 class="text-uppercase color-dark">Веб разработчик</h5>
                    </div>
                </li>
                <li class="col-sm-4 no-padding">
                    <div class="box">
                        <div class="ic"><i class="fa fa-laptop"></i></div>
                        <h5 class="text-uppercase color-dark">Веб дизайнер</h5>
                    </div>
                </li>
                <li class="col-sm-4 no-padding">
                    <div class="box ">
                        <div class="ic"><i class="fa fa-bar-chart"></i></div>
                        <h5 class="text-uppercase color-dark">Веб маркетолог</h5>
                    </div>
                </li>
            </ul>
        </div><!-- END SERVICES-->
    </section>
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
    methods:{
        copyLink(){
            navigator
                .clipboard
                .writeText(document
                    .querySelector("#web_site_link")
                    .innerText
                )
                .then(function() {
                alert('Ссылка скопирована в буфер обмена.')
                })
                .catch(function(error) {
                    console.error('Error:', error);
                });
        }
    }
})
</script>
<style>
.about-links{
    color: #fff;
    text-decoration: none;
}
.about-links:hover{
    color: #00d12f;
    text-decoration: none;
}
.about-links:focus{
    color: #00d12f;
    text-decoration: none;
}
</style>
