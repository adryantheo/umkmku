import Vue from 'vue'
import VueRouter from 'vue-router'
import RootCustomer from './components/Customers/RootCustomer'
import RootAdmin from './components/Admin/RootAdmin'

Vue.use(VueRouter)

const routes = [
    {
        path: '/', component: RootCustomer,
        
    },
    {
        path: '/admin', component: RootAdmin
    }
]

const router = new VueRouter({
    routes,
    hashbang: false,
    mode: 'history',
})

export default router;