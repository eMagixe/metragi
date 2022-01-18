<template>
    <div>
        <div class="card mb-3 rounded-0 border-0" v-for="apartment in getApartments" :key="apartment.id">
            <div class="price">{{ apartment.price }} руб</div>
            <div class="row">
                <div class="col-3">
                <img :src="apartment.images.length > 0 ? '/storage/' + apartment.images[0].url : 'https://brilliant24.ru/files/cat/template_01.png'" class="img-fluid rounded-0" alt="...">
                </div>
                <div class="col-8">
                <div class="card-body">
                    <h5 class="card-title">#{{ apartment.id }} {{ apartment.name }}</h5>
                    <p class="card-text">
                        Площадь: {{ apartment.square }} Количество комнат: {{ apartment.count_room }} Тип квартиры: {{ apartment.apartment_type }}, Дом: {{ apartment.housing_type }}, Тип объекта: {{ apartment.object_type }}
                    </p>
                    <p class="card-text"><small class="text-muted">Выставлен: {{ new Date(apartment.created_at).toLocaleDateString() }}</small></p>
                </div>

                {{ apartment.floor }}

                </div>
            </div>
            <a href="#" class="more">Подробнее</a>
        </div>
    </div>
</template>

<script>
import axios from "axios";
import { mapGetters, mapActions } from "vuex";

export default {
    computed: mapGetters(['getApartments']),
    methods: mapActions(['loadApartments']),
    mounted() {
        this.loadApartments();
    }
}
</script>

<style>
.price {
    background-color: #f1f1f1;
    padding: 1rem;
    font-size: 1.5rem;
}
.card {
    box-shadow: 0 4px 10px 0 rgba(0,0,0,0.2),0 4px 20px 0 rgba(0,0,0,0.19);
}
.more {
    background-color: #616161;
    color: #fff;
    padding: 1rem;
    text-align: center;
    text-decoration: none;
}
.more:hover {
    background-color: #ccc;
    color: #616161;
}
</style>
