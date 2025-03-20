<template>
    <div class="container-fluid no-padding team-section">
        <div class="container">
            <div class="section-header">
                <template v-if="this.$parent.$parent.$parent.lang === 'eng'">
                    <h3>Some examples of work.</h3>
                    <span>You will be able to see for yourself how they work after registration.</span>
                </template>
                <template v-if="this.$parent.$parent.$parent.lang === 'rus'">
                    <h3>Несколько примеров работ.</h3>
                    <span>Сможете сами убедиться в их работе после регистрации.</span>
                </template>
            </div>
            <ul>
                <template v-for="(example,index) in this.someExamples" :key="index">
                    <template v-if="index === this.exampleIndex">
                        <template v-if="this.$parent.$parent.$parent.lang === 'eng'" >
                            <li :data-thumb="'/front/images/team-thumb1.jpg'" >
                                <div class="row">
                                    <transition name="fade-up">
                                        <div class="col-md-6 no-padding larg-thumb">
                                            <img :src="'/front/images/team1.jpg'" width="100%" alt="team1"/>
                                        </div>
                                    </transition>
                                    <transition name="fade-down">
                                        <div class="col-md-6 no-padding">
                                            <div class="team-content">
                                                <h3>Harry richards</h3>
                                                <a href="#" title="Public Speaker">Public Speaker</a>
                                                <p>The first mate and his Skipper too will do their very best to make the others comfortable in their tropic island nest. And if you threw a party - invited everyone you knew. You would see the biggest gift would be from me and the card.</p>
                                                <ul>
                                                    <li class="fb"><a title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li class="twt"><a title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li class="gp"><a title="GooglePlus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    <li class="lnk"><a title="LinkedIn" href="#"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                                <div class="team-event-carousel">
                                                    <img :src="'/front/images/team-evnt1.jpg'" alt="team-evnt1" width="121" height="89"/>
                                                    <img :src="'/front/images/team-evnt1.jpg'" alt="team-evnt1" width="121" height="89"/>
                                                    <img :src="'/front/images/team-evnt1.jpg'" alt="team-evnt1" width="121" height="89"/>
                                                </div>
                                            </div>
                                        </div>
                                    </transition>
                                </div>
                            </li>
                        </template>
                        <template v-if="this.$parent.$parent.$parent.lang === 'rus'">

                        </template>
                    </template>
                </template>
            </ul>
        </div>

    </div>
</template>
<script>
export default {
    name: 'SomeExamples',
    data(){
        return{
            someExamples:null,
            exampleIndex:0
        }
    },
    mounted() {
        this.getSomeExamples()
    },
    methods:{
        getSomeExamples(){
            axios.get('/api/front/some-examples')
                .then(res => {
                    this.someExamples = res.data
                })
        },
        changeExampleIndex(index){
            this.exampleIndex = index
        }
    }
}
</script>
<style scoped>
.fade-up-enter-from{
    transform: translateY(-100%)
}
.fade-up-enter-to{
    transform: translateY(0);
}
.fade-up-enter-active{
    transition: all 2s ease;
}
.fade-up-leave-from{
    transform: translateY(0);
}
.fade-up-leave-to{
    transform: translateY(-100%)
}
.fade-up-leave-active{
    transition: all 2s ease;
}
</style>
