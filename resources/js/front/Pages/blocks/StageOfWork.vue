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
                                    <span class="icon" v-html="stage.icon"></span>
                                    <p v-html="stage.text_eng"></p>
                                </div>
                            </template>
                            <template v-else-if="this.$parent.$parent.$parent.lang === 'rus'">
                                <h3>{{ stage.title_ru }}</h3>
                                <div class="howwecan2-box-content">
                                    <span class="icon" v-html="stage.icon"></span>
                                    <p v-html="stage.text_ru"></p>
                                </div>
                            </template>
                        </div>
                    </div>
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
