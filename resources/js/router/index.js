window.Vue = require('vue').default;

import VueRouter from 'vue-router'
Vue.use(VueRouter)
const Home = require('../pages/Home.vue').default   //import atau mengambil file di folder 
const About = require('../pages/About.vue').default
import NotFound from '../pages/NotFound.vue' // untuk mengimportnya bisa menggunkan ini atau menggunkan yang diatasnya
import EditUser from '../pages/EditUser.vue'
import User from '../pages/User.vue'
import Profile from '../pages/Profile.vue'
import Registrasi from '../pages/Registrasi.vue'



const coba =[   //variabel
    {
        name: 'Home',
        path: '/home',   // jalur url
        component: Home  //template yang akan di rennder pada saat urlnya di akses 
    },
    {
        name: 'About',
        path: '/about',
        component: About 
    },
    {
        name: 'User',
        path:'/user',
        component: User,
    },
    {
        name: 'Registrasi',
        path:'/user/create',
        component: Registrasi,
    },

    {
        name: 'Profile',
        path:'/user/:id',
        component: Profile,
        props: true
    },
    {
        name: 'Edit',
        path:'/user/:id/edit',
        component: EditUser,
        props: true
    },

    // membantu user bila salah url
    {
        path: '*', // artinya bila user mengetik url yang tidak terdaftar maka not found
        component: NotFound
    }
]

const router = new VueRouter(       
    {
        linkActiveClass: 'active',
        mode: 'history',
        routes: coba
    }
)

export default router