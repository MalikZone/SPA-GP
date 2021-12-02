import Vue from "vue"
import VueRouter from "vue-router"
import router from "./routes"
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
// import VueToast from 'vue-toast-notification';
// import 'vue-toast-notification/dist/theme-sugar.css';

// Vue.use(VueToast);
Vue.use(VueRouter)
Vue.use(BootstrapVue)
Vue.use(IconsPlugin)

const route = new VueRouter({
    routes: [...router],
    mode: "history"
        // routes: router
})

const app = new Vue({
    el: "#app",
    router: route
}).$mount("#app");