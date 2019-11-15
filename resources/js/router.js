import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)
const routes = [
    {
        path: '/', component: () => import('./components/Admin/RootAdmin'/* webpackChunkName: "js/chunk-root-admin" */),
        
    },
    {
        path: '/admin', component: () => import('./components/Admin/Dashboard'/* webpackChunkName: "js/chunk-admin-dashboard" */),
        children:[
            { path: '/admin', component: () => import('./components/Admin/Pages/Jurnal'/* webpackChunkName: "js/chunk-admin-Jurnal" */)},
            { path: 'materi', component: () => import('./components/Admin/Pages/Materi'/* webpackChunkName: "js/chunk-admin-Materi" */)},
            { path: 'laporan', component: () => import('./components/Admin/Pages/Laporan'/* webpackChunkName: "js/chunk-admin-Laporan" */)},
            { path: 'pengaturan', component: () => import('./components/Admin/Pages/Settings'/* webpackChunkName: "js/chunk-admin-Settings" */) },
            { path: 'aboutus', component: () => import('./components/Admin/Pages/AboutUs'/* webpackChunkName: "js/chunk-admin-aboutus" */) },   
        ],
        meta: {requiresAuth: true},
    },
    {
        path: '/login', component: () => import('./components/Admin/RootAdmin' /* webpackChunkName: "js/chunk-Login" */)
    },
    {
        path: '/register', component: () => import('./components/Admin/AdminRegister' /* webpackChunkName: "js/chunk-Register" */)
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