/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');
import Vue from 'vue'
import { BootstrapVue, BootstrapVueIcons } from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import 'vuejs-noty/dist/vuejs-noty.css'
import VueNoty from 'vuejs-noty'
Vue.use(VueNoty)
Vue.use(BootstrapVue)
Vue.use(BootstrapVueIcons)

import router from './router/index' 
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('bootstrap-component', require('./components/bootstrap.vue').default);
Vue.component('header-component', require('./components/header.vue').default);
Vue.component('footer-component', require('./components/footer.vue').default);
Vue.component('head-component', require('./components/header1.vue').default);

const app = new Vue({
    el: '#app',
    data : {
        title: 'kita harus bisa '
    },
    router
});
