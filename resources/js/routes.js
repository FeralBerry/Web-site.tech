import Main from "./front/Pages/Main.vue"
import About from "./front/Pages/About.vue"
import Contact from "./front/Pages/Contact.vue"
import Copies from "./front/Pages/Copies.vue"
import Blog from "./front/Pages/Blog.vue"
import Services from "./front/Pages/Services.vue"
import Auth from "./front/Pages/Auth.vue"


const routes = [
    {
        path: '/',
        component: Main,
        name: 'front.index'
    },
    {
        path: '/about',
        component: About,
        name: 'front.about'
    },
    {
        path: '/contact',
        component: Contact,
        name: 'front.contact'
    },
    {
        path: '/copies',
        component: Copies,
        name: 'front.copies'
    },
    {
        path: '/blog',
        component: Blog,
        name: 'front.blog'
    },
    {
        path: '/services',
        component: Services,
        name: 'front.services'
    },
    {
        path: '/auth',
        component: Auth,
        name: 'front.auth'
    },
]
export default routes
