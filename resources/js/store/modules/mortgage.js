import axios from "axios";
export default {
    actions: {
        addMortgage(context, mortgage) {
            axios.post('/api/mortgage/create', mortgage);
        }
    },
    mutations: {

    },
    state: {

    },
    getters: {

    }
}
