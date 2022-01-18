import VueRouter from "vue-router";
import Vue from "vue";

Vue.use(VueRouter);

import Home from "./views/Home";
import Sell from "./views/Sell";
import Mortgage from "./views/Mortgage";

const routes = [
    { path: '/', component: Home },
    { path: '/sell', component: Sell },
    { path: '/mortgage', component: Mortgage },
];

export default new VueRouter({
    mode: "history",
    routes
});
