<template>

    <!--TESTIMONIAL-->
    <div class="parallax-bg black-light bg2">
        <div class="container-medium">
            <div class="block-page ">
                <div id="carousel-example-generic" class="carousel slide carousel-testi" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <template v-for="(item,key) in this.reviews">
                            <template v-if="this.active === key">
                                <li data-target="#carousel-example-generic" :data-slide-to="key" class="active"></li>
                            </template>
                            <template v-else>
                                <li data-target="#carousel-example-generic" :data-slide-to="key"></li>
                            </template>
                        </template>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <template v-for="(item,key) in this.reviews">
                            <template v-if="this.active === key">
                                <div class="item active">
                                    <div class="box-testimonial">
                                        <img :src="'/base/theme/images/people/'+ item.profile_img" alt="" class="img-profile">
                                        <h4 class="color-dark text-capitalize no-margin-top line-dash-bottom" v-html="item.title"></h4>
                                        <p v-html="item.description"></p>
                                        <p v-if="item.logo_img !== null && item.company_url !== null"><a :href="item.company_url"><img :src="'/base/theme/images/patner/'+ item.logo_img" alt="" class="img-logo-client"></a></p>
                                        <p class="font-alt no-margin color-dark" v-html="item.company_name"></p>
                                    </div>
                                </div>
                            </template>
                            <template v-else>
                                <div class="item">
                                    <div class="box-testimonial">
                                        <img :src="'/base/theme/images/people/'+ item.profile_img" alt="" class="img-profile">
                                        <h4 class="color-dark text-capitalize no-margin-top line-dash-bottom" v-html="item.title"></h4>
                                        <p v-html="item.description"></p>
                                        <p v-if="item.logo_img !== null && item.company_url !== null"><a :href="item.company_url"><img :src="'/base/theme/images/patner/'+ item.logo_img" alt="" class="img-logo-client"></a></p>
                                        <p class="font-alt no-margin color-dark" v-html="item.company_name"></p>
                                    </div>
                                </div>
                            </template>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div><!--END TESTIMONIAL-->
</template>
<script>
import {defineComponent} from "vue";
import PortfolioModal from "@/Components/front/Sections/PortfolioModal.vue";
export default defineComponent({
    data(){
        return {
            reviews:null,
            active:0
        }
    },
    components: {},
    mounted() {
        this.getReviews()
    },
    methods:{
        getReviews(){
            axios.post('/api/get/reviews')
                .then((res) => {
                    console.log(res.data)
                    this.reviews = res.data
                })
        },
    }
})
</script>
<style scoped>

</style>
