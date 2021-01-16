import Vue from 'vue'
import VueRouter from 'vue-router'
//import axios from 'axios'
//Vue.prototype.$axios = axios;

//let axios = require('axios');

Vue.use(VueRouter) 
//Vue.use(axios)
//Vue.prototype.$http = axios;

import App from './views/App'
import Hello from './views/Hello'
import Home from './views/Home'
import Order from './views/Order'

const router = new VueRouter({
    mode: 'history',
    routes: [
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '/hello',
        name: 'hello',
        component: Hello,
    },
    {
        path: '/order',
        name: 'order',
        component: Order,
    },
    ],
});

const app = new Vue({
    el: '#app',
    components: { App, Order },
    router,
});