

require('./bootstrap');


import Vue from 'vue';


import store from './store';

Vue.component('example-component',require('./components/ExampleComponents.vue').default);
Vue.component('product-add',require('./components/products/ProductAdd.vue').default);
Vue.component('product-edit',require('./components/products/ProductEdit.vue').default);
const app = new Vue({
    el:'#app',
    store,
});

