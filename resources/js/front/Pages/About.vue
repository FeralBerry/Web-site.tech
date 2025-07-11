<template>
<div>
    <!-- Team Section -->
    <div class="container-fluid no-padding team-section">
        <div class="section-padding"></div>
        <div class="section-header">
            <h3>Чтобы лучше понять с кем имеете дело</h3>
            <span>Я немного расскажу о себе</span>
        </div>
        <AboutSlider></AboutSlider>
        <div class="section-padding"></div>
    </div><!-- Team Section /- -->
</div>
</template>
<script>
import AboutSlider from "@/front/Pages/blocks/AboutSlider.vue";

export default {
    name: 'AboutPage',
    components: {AboutSlider}
}
</script>
<style scoped>

</style>
