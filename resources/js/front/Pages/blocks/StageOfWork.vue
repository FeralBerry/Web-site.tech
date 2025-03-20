<template>
    <div class="container-fluid no-padding howwecan2 howwecan-section">
        <div class="section-padding"></div>
        <div class="container">
            <div class="section-header">
                <template v-if="this.$parent.$parent.$parent.lang === 'eng'">
                    <h3>Stages of work</h3>
                    <span>How is everything going</span>
                </template>
                <template v-else-if="this.$parent.$parent.$parent.lang === 'rus'">
                    <h3>Этапы работы</h3>
                    <span>Как все происходит</span>
                </template>
            </div>
            <div class="row">
                <div class="howwecan2-block">
                    <div class="col-md-4 col-sm-6 col-xs-6" v-for="(stage,index) in stages" :key="index">
                        <div class="howwecan2-box">
                            <template v-if="this.$parent.$parent.$parent.lang === 'eng'">
                                <h3>{{ stage.title_eng }}</h3>
                                <div class="howwecan2-box-content">
                                    <div v-html="stage.icon"></div>
<!--                                    <span class="icon icon-WorldWide"></span>-->
                                    <p v-html="stage.text_eng"></p>
                                </div>
                            </template>
                            <template v-else-if="this.$parent.$parent.$parent.lang === 'rus'">
                                <h3>{{ stage.title_ru }}</h3>
                                <div class="howwecan2-box-content">
                                    <div v-html="stage.icon"></div>
<!--                                    <span class="icon icon-WorldWide"></span>-->
                                    <p v-html="stage.text_ru"></p>
                                </div>
                            </template>
                        </div>
                    </div>
<!--                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="howwecan2-box">
                            <h3>Set Up a Guest Lecture</h3>
                            <div class="howwecan2-box-content">
                                <span class="icon icon-Briefcase"></span>
                                <p>Believe it or not I'm walking on air never thought I could feel so free! Doin' it our way. There's nothing we</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="howwecan2-box">
                            <h3>Set Up a Formal Presentation</h3>
                            <div class="howwecan2-box-content">
                                <span class="icon icon-Files"></span>
                                <p>Believe it or not I'm walking on air never thought I could feel so free! Doin' it our way. There's nothing we</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="howwecan2-box">
                            <h3>Set Up Internal Conference</h3>
                            <div class="howwecan2-box-content">
                                <span class="icon icon-Users"></span>
                                <p>Believe it or not I'm walking on air never thought I could feel so free! Doin' it our way. There's nothing we</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="howwecan2-box">
                            <h3>Set Up a Public Communication</h3>
                            <div class="howwecan2-box-content">
                                <span class="icon icon-Headset"></span>
                                <p>Believe it or not I'm walking on air never thought I could feel so free! Doin' it our way. There's nothing we</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="howwecan2-box">
                            <h3>Set Up a Charity Event</h3>
                            <div class="howwecan2-box-content">
                                <span class="icon icon-Pulse"></span>
                                <p>Believe it or not I'm walking on air never thought I could feel so free! Doin' it our way. There's nothing we</p>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
        <div class="section-padding"></div>
    </div>
</template>
<script>
export default {
    name: 'StageOfWork',
    data(){
        return{
            stages:null
        }
    },
    mounted() {
        this.getStages()
    },
    methods:{
        getStages(){
            axios.get('/api/front/stages')
                .then(res => {
                    this.stages = res.data
                })
        }
    }
}
</script>
<style scoped>

</style>
