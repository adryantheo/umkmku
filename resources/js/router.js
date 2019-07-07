import Vue from 'vue'
import VueRouter from 'vue-router'
import RootCustomer from './components/Customers/RootCustomer'

Vue.use(VueRouter)

const routes = [
    {
        path: '/', component: RootCustomer
    }
]

const router = new VueRouter({
    routes,
    hashbang: false,
    mode: 'history',
})

export default router;