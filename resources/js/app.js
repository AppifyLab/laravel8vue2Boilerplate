require('./bootstrap');
import Vue from 'vue';

Vue.config.productionTip=false;

Vue.component('main-content', require('./components/master.vue').default);

//store vuex -start
// import store from './store'
//store vuex -end

//vue router -start
import router from './router';
//vue router -end

const app = new Vue({
    el: '#app',
    router
});
