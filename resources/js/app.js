import './bootstrap.js';
import { createApp } from 'vue';
import router from "./router.js";
import IndexComponent from './components/IndexComponent.vue';

createApp(IndexComponent)
    .use(router)
    .mount('#app')
