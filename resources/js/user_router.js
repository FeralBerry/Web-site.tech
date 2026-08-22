import { createMemoryHistory, createRouter } from 'vue-router'
import routes from "./user_routes.js";

const router = createRouter({
    history: createMemoryHistory(),
    routes,
})

export default router
