import Vue from 'vue'
import VueRouter from 'vue-router'
import RootCustomer from './components/Customers/RootCustomer'
import Dashboard from './components/Admin/Dashboard'
import RootAdmin from './components/Admin/RootAdmin'
import RegisterAdmin from './components/Admin/AdminRegister'
import AdminLogout from './components/Admin/AdminLogout'
import TambahArtikel from './components/Admin/CreateArtikel'
import HapusArtikel from './components/Admin/HapusArtikel'
import UpdateArtikel from './components/Admin/UpdateArtikel'

Vue.use(VueRouter)

const routes = [
    {
        path: '/', component: RootCustomer,
        
    },
    {
        path: '/admin', component: Dashboard,
        children:[
            {
                path: 'tambah-artikel',
                component: TambahArtikel,
            },
            {
                path: 'update-artikel',
                component: UpdateArtikel,
            },
            {
                path: 'hapus-artikel',
                component: HapusArtikel
            },
        ]
    },
    {
        path: '/login', component: RootAdmin
    },
    {
        path: '/register', component: RegisterAdmin
    },
    {
        path: '/logout', component: AdminLogout
    }
]

const router = new VueRouter({
    routes,
    hashbang: false,
    mode: 'history',
})

export default router;