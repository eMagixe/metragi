import axios from "axios";
export default {
    actions: {
        async loadApartments(context) {
            let apartments = await axios.get("/api/apartments")
            .then(response => response.data)
            .catch(error => {
                console.error(error);
                return [];
            });
            context.commit('updateApartments', apartments);
        },
        async filterApartments(context, filters) {
            let apartments = await axios.post("/api/apartments/filter", filters)
            .then(response => response.data)
            .catch(error => {
                console.error(error);
                return [];
            });
            context.commit('updateApartments', apartments);
        },
        addApartment(context, apartment) {
            axios.post('/api/apartments', apartment);
        }
    },
    mutations: {
        updateApartments(state, apartments) {
            state.apartments = apartments;
        }
    },
    state: {
        apartments: []
    },
    getters: {
        getApartments(state) {
            return state.apartments;
        }
    }
}
