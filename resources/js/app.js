window.Vue = require('vue');

import Vuetify from 'vuetify'
import router from './router'
import axios from 'axios'


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

window.EventBus = new Vue()
window.axios = axios.create()

Vue.use(Vuetify, {
    iconfont: 'md',
    // override colors
    theme: {
        primary: "#ff5722",
    }
});

import AppRoot from './components/AppRoot'
const app = new Vue({
    el: '#app',
    router,
    components: {
        AppRoot
    }
});
