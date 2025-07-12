import './bootstrap.js';
import { createApp } from 'vue';
import router from "./user_router.js";
import UserComponent from './components/back/user/UserComponent.vue';

createApp(UserComponent)
    .use(router)
    .mount('#app')
