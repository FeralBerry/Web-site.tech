<template>
    <portfolio-modal :url="modalUrl" :modalVision="modalVision"></portfolio-modal>
    <section id="portfolio" class="block-section">
        <!--PORTFOLIO TITLE-->
        <div class=" shape-bottom">
            <div class="bg-secondary block-title">
                <div class="container">
                    <h2 class="text-uppercase color-dark text-bold no-margin">Портфолио</h2>
                    <div class="title-icon"> <i class="fa fa-inbox"></i> </div>
                </div>
            </div>
        </div><!--END PORTFOLIO TITLE-->
        <!--List WOrk-->
        <div class="block-page" >
            <div class="container-medium clearfix">
                <div class="row list-work">
                    <template v-for="(item,key) in this.portfolio">
                            <div class="col-md-4 col-sm-6">
                                <div class="box-work">
                                    <div class="work-preview">
                                        <img class="portfolio_img" :src="item.img" :alt="item.title">
                                        <div class="hover">
                                            <div class="link-btns">
                                                <a :href="item.img" :title="item.title" class="galery-item" ><i class="fa fa-search-plus"></i></a>
                                                <a @click="openModal(item.url)" ><i class="fa fa-link"></i></a>
                                            </div>
                                            <a @click="openModal(item.url)"  class="project-title">{{ item.title }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </template>
                </div>
                <!--BTN SHOW MORE-->
                <div class="box-btn-more" v-if="this.maxPortfolio">
                    <a @click="addMorePortfolio" class="btn btn-flat-line btn-link" id="more-work"> Показать еще</a>
                </div>
            </div>
        </div><!--END List WOrk-->
        <reviews></reviews>
    </section>
</template>
<script>
import {defineComponent} from "vue";
import PortfolioModal from "@/Components/front/Sections/PortfolioModal.vue";
import Reviews from "@/Components/front/Sections/Reviews.vue";
export default defineComponent({
    data(){
        return {
            modalUrl:'',
            modalVision:false,
            portfolio:null,
            maxPortfolio:true,
        }
    },
    components: {PortfolioModal,Reviews},
    mounted() {
        this.getMainPortfolio()
    },
    methods:{
        openModal(url){
            this.modalVision = true
            this.modalUrl = url
        },
        getMainPortfolio(){
            let data = {
                count:0
            };
            axios.post('/api/main/portfolio',data)
                .then((res) => {
                    this.portfolio = res.data.data
                    if (res.data.current_page === res.data.last_page){
                        this.maxPortfolio = false
                    }
                })
        },
        addMorePortfolio(){
            let data = {
                count:this.portfolio.length
            }
            axios.post('/api/main/portfolio', data)
                .then((res) => {
                    this.portfolio = res.data.data
                    if (res.data.current_page === res.data.last_page){
                        this.maxPortfolio = false
                    }
                })
        },
    }
})
</script>
<style scoped>

</style>
