import VueRouter from "vue-router";
import {routes} from "./routes"

Vue.component('app-sidebar-nav', require('./components/admin/shared/SideBarNav').default);
Vue.component('app-topbar-nav', require('./components/admin/shared/TopNavBar').default);
Vue.component('app-content', require('./components/App').default);
Vue.component('loading-spinner', require('./components/admin/shared/LoadingSpinner').default);

Vue.use(VueRouter);

const router = new VueRouter({
    routes,
    // mode:'history'
});

const app = new Vue({
    el: '#wrapper',
    router
});
