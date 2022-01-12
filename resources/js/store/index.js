import Vue from "vue";
import Vuex from "vuex";
import apartment from "./modules/apartment";

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        apartment
    }
});
