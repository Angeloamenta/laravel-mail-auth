/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import App from "./views/App";

import Home from "./pages/Home";
import Contattami from "./pages/Contattami";
import Posts from "./pages/Posts";
import Accesso from "./pages/Accesso";


import VueRouter from "vue-router";
import Vue from "vue";

Vue.use(VueRouter);
const router = new VueRouter({
    routes:[
        {
            path:'/',
            name: 'home',
            component: Home
        },
        {
            path:'/contattami',
            name: 'contattami',
            component: Contattami
        },
        {
            path:'/posts',
            name: 'posts',
            component: Posts
        },
        {
            path:'/accesso',
            name: 'accesso',
            component: Accesso
        }
    ]
});
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 const app = new Vue({
    el: '#app',
    render: h => h(App),
    router
});
