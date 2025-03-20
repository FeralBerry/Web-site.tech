<template>
<div>
    <div class="container-fluid no-padding howwecan-section">
        <div class="section-padding"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="howwecan-left">
                        <div class="img-box">
                            <img :src="'/front/images/howwecan2.jpg'" alt="howwecan1" width="149" height="149"/>
                        </div>
                        <div class="img-box">
                            <img :src="'/front/images/howwecan1.png'" alt="howwecan2" width="149" height="149"/>
                        </div>
                        <div class="img-box">
                            <img :src="'/front/images/howwecan3.png'" alt="howwecan3" width="149" height="149"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <div class="howwecan-right">
                        <div class="section-header" v-if="this.$parent.$parent.$parent.lang === 'eng'">
                            <h3>What can I offer</h3>
                        </div>
                        <div class="section-header" v-else-if="this.$parent.$parent.$parent.lang === 'rus'">
                            <h3>Что я могу предложить</h3>
                        </div>
                        <ul class="nav nav-tabs" role="tablist" >
                            <template v-for="(advantages,index) in this.advantagesInfo" :key="index">
                                <li v-if="index === this.activeTab" class="active">
                                    <a @click.prevent="this.showTabContent(index)">
                                        <div v-html="advantages.tab_icon"></div>
                                    </a>
                                </li>
                                <li v-else>
                                    <a @click.prevent="this.showTabContent(index)">
                                        <div v-html="advantages.tab_icon"></div>
                                    </a>
                                </li>
                            </template>
                        </ul>
                        <template v-for="(advantages,index) in this.advantagesInfo">
                            <transition name="tab">
                                <div class="tab-content" v-if="this.activeTab === index">
                                    <div class="tab-pane active in">
                                        <template v-if="this.$parent.$parent.$parent.lang === 'eng'">
                                            <h3>{{ advantages.title_eng }}</h3>
                                            <p v-html="advantages.description_eng"></p>
                                            <template v-if="advantages.link !== ''">
                                                <router-link :to="advantages.link" :title="advantages.link_title_eng">{{ advantages.link_button_text_eng }}</router-link>
                                            </template>
                                        </template>
                                        <template v-else-if="this.$parent.$parent.$parent.lang === 'rus'">
                                            <h3>{{ advantages.title_ru }}</h3>
                                            <p v-html="advantages.description_ru"></p>
                                            <template v-if="advantages.link !== ''">
                                                <router-link :to="advantages.link" :title="advantages.link_title_ru">{{ advantages.link_button_text_ru }}</router-link>
                                            </template>
                                        </template>
                                    </div>
                                </div>
                            </transition>
                        </template>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-padding"></div>
    </div>
</div>
</template>
<script>
export default {
    name: 'Advantages',
    mounted() {
        this.getAdvantagesInfo()
    },
    data(){
        return {
            advantagesInfo: null,
            activeTab: 0
        }
    },
    methods:{
        getAdvantagesInfo(){
            axios.get('/api/front/advantages')
                .then(res => {
                    this.advantagesInfo = res.data
                })
        },
        showTabContent(index){
            this.activeTab = index
        }
    }

}
</script>
<style scoped>
.tab-enter-from{
    opacity: 0;
}
.tab-enter-to{
    opacity: 1;
}
.tab-enter-active{
    transition-delay: 1s;
    transition: all ease 1s;

}
.tab-leave-from{
    opacity: 1;
}
.tab-leave-to{
    opacity: 0;
}
.tab-leave-active{
    transition: all ease 1s;
}
.tab-content{
    position: absolute;
}
@media (max-width: 600px) {
    .tab-content{
        width: 100%;
        left: 0;
    }
    .howwecan-section{
        height: 550px;
    }
}
</style>
