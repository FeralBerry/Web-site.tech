import '../bootstrap.js';
import { createApp } from 'vue';
import router from "./router.js";
import MainComponent from '../Components/back/MainComponent.vue';

createApp(MainComponent)
    .use(router)
    .mount('#app')
