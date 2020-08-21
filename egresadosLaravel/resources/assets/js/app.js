require('./bootstrap');

window.Vue = require('vue');

Vue.component('chat-component', require('./../components/ChatComponent.vue').default);

import VueChatScroll from 'vue-chat-scroll'
Vue.use(VueChatScroll)

const app = new Vue({
    el: '#app',
});