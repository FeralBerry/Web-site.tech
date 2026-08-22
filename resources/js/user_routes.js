import Main from "./front/Pages/Main.vue"

let back = '/user'

const routes = [
    {
        path: back,
        component: Main,
        name: 'user.index'
    },
]
export default routes
