import Vue from 'vue'
import VueRouter from 'vue-router' 
import store from './store/index.js'


import App from './views/App'
import Hello from './views/Hello'
//import Home from './views/Home'
import Order from './views/Order'
import Cart from './components/Cart.vue'
import Product from './components/Product.vue' 

Vue.use(VueRouter) 

const router = new VueRouter({
    mode: 'history',
    routes: [
    {
        path: '/', name: 'home', component: Product // Home
    },
    {
        path: '/hello', name: 'hello', component: Hello,
    },
    {
        path: '/order', name: 'order', component: Order,
    },
    { path: '/cart', component: Cart } ,




    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
    store
});