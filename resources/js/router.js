import Vue from 'vue'
import VueRouter from 'vue-router'
import RootCustomer from './components/Customers/RootCustomer'
import Dashboard from './components/Admin/Dashboard'
import RootAdmin from './components/Admin/RootAdmin'
import RegisterAdmin from './components/Admin/AdminRegister'
import AdminLogout from './components/Admin/AdminLogout'
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
            {
                path: 'jurnal',
                component: Jurnal,
            },
            {
                path: 'materi',
                component: Materi,
            },
            {
                path: 'laporan',
                component: Laporan
            },
            {
                path: 'pengaturan',
                component: Settings
            },
            {
                path: 'aboutus',
                component: AboutUs
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