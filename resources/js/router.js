import VueRouter from "vue-router";
import Vue from "vue";

Vue.use(VueRouter);

import Home from "./views/Home";
import Sell from "./views/Sell";

const routes = [
    { path: '/', component: Home },
    { path: '/sell', component: Sell }
];

export default new VueRouter({
    mode: "history",
    routes
});
