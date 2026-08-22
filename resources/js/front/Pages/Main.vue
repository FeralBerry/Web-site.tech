<template>
<div>
        <MainSlider/>
        <Advantages/>
        <DevelopmentTechnologies/>
        <ApplicationForDevelopment/>
        <SomeExamples/>
        <StageOfWork/>
        <MainBlog/>
</div>
</template>

<script>
import MainSlider from "@/front/Pages/blocks/MainSlider.vue";
import Advantages from "@/front/Pages/blocks/Advantages.vue";
import DevelopmentTechnologies from "@/front/Pages/blocks/DevelopmentTechnologies.vue";
import ApplicationForDevelopment from "@/front/Pages/blocks/ApplicationForDevelopment.vue";
import SomeExamples from "@/front/Pages/blocks/SomeExamples.vue";
import StageOfWork from "@/front/Pages/blocks/StageOfWork.vue";
import MainBlog from "@/front/Pages/blocks/MainBlog.vue";
export default {
    name: 'MainPage',
    components: {
        MainBlog,
        StageOfWork,
        SomeExamples,
        MainSlider,
        Advantages,
        DevelopmentTechnologies,
        ApplicationForDevelopment,
    },
    mounted() {

    },
    methods:{

    }
}
</script>

<style lang="scss" scoped>

</style>
