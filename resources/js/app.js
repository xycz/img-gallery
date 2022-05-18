require('./bootstrap');

window.Vue = require('vue').default;

Vue.config.productionTip = false
Vue.config.devtools = false

Vue.component('app', require('./components/App.vue').default);

const app = new Vue({
    el: '#app',
});