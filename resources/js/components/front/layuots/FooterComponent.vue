<template>
    <!-- Footer Main -->
    <footer class="footer-main container-fluid no-padding">
        <!-- Container -->
        <div class="container">
                <!-- Footer About -->
                <div class="row footer-about" style="min-height: 100px;width: 100%">
                    <div class="logo-block">
                        <img :src="'/logo-big-white.png'" alt="Web Site Technology" width="120" height="80"/>
                    </div>
                    <div class="footer-about-content">
                        <FooterQuotes v-for="(quote,index) in footerQuotes"
                                      :key="index"
                                      :index="index"
                                      :quotes="quote"
                                      :footerQuotesLength="footerQuotesLength"
                        />
                    </div>
                </div><!-- Footer About /- -->
            <FooterSubscribeComponent/>
        </div><!-- Container /- -->
        <FooterNavMenuComponent/>
        <!-- Container -->
        </footer><!-- Footer Main /- -->
</template>

<script>
    import FooterNavMenuComponent from "@/components/front/layuots/FooterNavMenuComponent.vue";
    import FooterSubscribeComponent from "@/components/front/layuots/FooterSubscribeComponent.vue";
    import FooterQuotes from "@/components/front/layuots/FooterBlocks/FooterQuotes.vue";
    export default {
        name: 'FooterComponent',
        data(){
            return{
                footerQuotes: null,
                seo: null,
                footerQuotesLength: 0
            }
        },
        components: {
            FooterQuotes,
            FooterNavMenuComponent,
            FooterSubscribeComponent
        },
        mounted() {
            this.getSeoTags()
            this.getQuotes()
        },
        methods:{
            getSeoTags(){
                axios.get('/api/front/seo')
                    .then(res => {
                        this.seo = res.data
                    })
            },
            getQuotes(){
                axios.get('/api/front/footer_quotes')
                    .then(res => {
                        this.footerQuotes = res.data
                        this.footerQuotesLength = res.data.length
                    })
            },
        }
    }
</script>
