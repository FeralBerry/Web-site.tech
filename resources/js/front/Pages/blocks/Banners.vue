<template>
    <div class="container-fluid page-banner no-padding">
        <div class="section-padding"></div>
        <div class="container">
            <div class="banner-content-block">
                <div class="banner-content">
                    <h3>{{ title }}</h3>
                    <ol class="breadcrumb">

                    </ol>
                </div>
            </div>
        </div>
        <div class="section-padding"></div>
    </div>
</template>
<script>
export default {
    name:"Banners",
    data(){
        return{

        }
    },
    props:{
        title:{
            type:String,
            required:true
        },
        links:{
            type:Object,
            required:true
        },
        img:{
            type:String,
            required:true
        }
    },
    mounted() {
        this.setBannerImg()
        this.setLinks()
    },
    methods:{
        setBannerImg(){
            document.querySelector('.page-banner').style.cssText = 'background: url(' +this.img + ') no-repeat center center;' +
                'background-size: cover;'
        },
        setLinks(){
            let html = '';
            let item = '';
            let count = 0;
            for(item in this.links) {
                console.log(item)
                count++;
            }

            for (let i = 0; i < count; i++) {
                if(i !== count - 1){
                    html += '<li><router-link to="'+this.links[i].url+'">'+this.links[i].title+'</router-link></li>'
                } else {
                    html += '<li class="active">'+this.links[i].title+'</li>'
                }
            }
            document.querySelector('.breadcrumb').innerHTML = html
        }
    }
}
</script>
<style scoped>

</style>
