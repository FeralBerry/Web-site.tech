import Main from "./front/Pages/Main.vue"
import About from "./front/Pages/About.vue"
import BlogArticle from "./front/Pages/BlogArticle.vue"
import Contact from "./front/Pages/Contact.vue"
import Copies from "./front/Pages/Copies.vue"
import Blog from "./front/Pages/Blog.vue"
import Services from "./front/Pages/Services.vue"
import ServiceArticle from "./front/Pages/blocks/ServiceArticle.vue"
import Auth from "./front/Pages/Auth.vue"
import CopiesArticle from "@/front/Pages/CopiesArticle.vue"


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
        path: '/copies/:id',
        component: CopiesArticle,
        name: 'front.copies.example'
    },
    {
        path: '/blog',
        component: Blog,
        name: 'front.blog'
    },
    {
        path: '/blog/:id',
        component: BlogArticle,
        name: 'front.blog.article'
    },
    {
        path: '/services',
        component: Services,
        name: 'front.services'
    },
    {
        path: '/services/:id',
        component: ServiceArticle,
        name: 'front.service.article'
    },
    {
        path: '/auth',
        component: Auth,
        name: 'front.auth'
    },
]
export default routes
