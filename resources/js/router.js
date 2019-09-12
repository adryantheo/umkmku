import Vue from 'vue'
import VueRouter from 'vue-router'
import RootCustomer from './components/Customers/RootCustomer'
import Dashboard from './components/Admin/Dashboard'
import RootAdmin from './components/Admin/RootAdmin'
import RegisterAdmin from './components/Admin/AdminRegister'
import Jurnal from './components/Admin/Pages/Jurnal'
import Settings from './components/Admin/Pages/Settings'
import Laporan from './components/Admin/Pages/Laporan'
import Materi from './components/Admin/Pages/Materi'
import AboutUs from './components/Admin/Pages/AboutUs'

Vue.use(VueRouter)

const routes = [
    {
        path: '/', component: RootAdmin,
        
    },
    {
        path: '/admin', component: Dashboard,
        children:[
            { path: '/admin', component: Jurnal },
            { path: 'materi', component: Materi },
            { path: 'laporan', component: Laporan },
            { path: 'pengaturan', component: Settings },
            { path: 'aboutus', component: AboutUs },   
        ],
        meta: {requiresAuth: true},
    },
    {
        path: '/login', component: RootAdmin
    },
    {
        path: '/register', component: RegisterAdmin
    },
]

const router = new VueRouter({
    routes,
    hashbang: false,
    mode: 'history',
})

import User from '../js/components/helpers/User';

router.beforeEach(async (to, from, next) => {
    if(to.matched.some(route => route.meta.requiresAuth)){
        if(!User.loggedIn()){
            next({path: '/login', replace: true})
            return
        }
    }
    if(to.path === "/login" || to.path === "/register"){
        if(User.loggedIn()){
            next({path: '/admin', replace: true})
            return
        }
    }
    next();
})

export default router;