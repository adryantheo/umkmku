import Vue from 'vue'
import VueRouter from 'vue-router'
import RootCustomer from './components/Customers/RootCustomer'
import Dashboard from './components/Admin/Dashboard'

Vue.use(VueRouter)

const routes = [
    {
        path: '/', component: RootCustomer,
        
    },
    {
        path: '/admin', component: Dashboard
    }
]

const router = new VueRouter({
    routes,
    hashbang: false,
    mode: 'history',
})

export default router;