import Vue from "vue";
import Vuex from "vuex";
import apartment from "./modules/apartment";
import mortgage from "./modules/mortgage";
import imageUploder from "./modules/imageUploder";

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        apartment, mortgage, imageUploder
    }
});
