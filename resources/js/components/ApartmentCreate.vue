<template>
    <div class="form-check">
        <h5>Наименование</h5>
        <div class="input-group">
            <input v-model="apartment.name" type="text" aria-label="Наименование" class="form-control" placeholder="Наименование">
        </div>
        <h5>Количество комнат</h5>
        <select v-model="apartment.count_room" class="form-select" aria-label="Хочу продать">
            <option :value="item.rooms" v-for="item in input_filters.room_count" :key="'room_' + item.id">
                {{ item.name }}
            </option>
        </select>
        <h5>Цена</h5>
        <div class="input-group">
            <input v-model="apartment.price" type="text" aria-label="Цена" class="form-control" placeholder="Цена">
        </div>
        <h5>Тип объекта</h5>
        <div class="btn-group" role="group" aria-label="object_type">
            <input v-model="apartment.object_type" type="radio" class="btn-check" value="old" name="object_type" id="old" autocomplete="off">
            <label class="btn btn-outline-secondary" for="old">Вторичка</label>
            <input v-model="apartment.object_type" type="radio" class="btn-check" value="new" name="object_type" id="new" autocomplete="off">
            <label class="btn btn-outline-secondary" for="new">Новостройка</label>
        </div>
        <h5>Общая площадь, м<sup>3</sup></h5>
        <div class="input-group">
            <input v-model="apartment.square" type="text" aria-label="Площадь" class="form-control" placeholder="Площадь">
        </div>
        <h5>Этажей в доме</h5>
        <div class="input-group">
            <input v-model="apartment.floor" type="text" aria-label="Этажей" class="form-control" placeholder="Этажей">
        </div>
        <h5>Тип жилья</h5>
        <div class="btn-group" role="group" aria-label="apartment_type">
            <input v-model="apartment.apartment_type" value="flat" type="radio" class="btn-check" name="apartment_type" id="flat" autocomplete="off">
            <label class="btn btn-outline-secondary" for="flat">Квартиры</label>
            <input v-model="apartment.apartment_type" value="apartment" type="radio" class="btn-check" name="apartment_type" id="apartment" autocomplete="off">
            <label class="btn btn-outline-secondary" for="apartment">Апартаменты</label>
        </div>
        <h5>Тип дома</h5>
        <select v-model="apartment.housing_type" class="form-select" aria-label="Хочу продать">
            <option :value="item.type" v-for="item in input_filters.house_types" :key="item.type">
                {{ item.name }}
            </option>
        </select>
        <h5>Изображения</h5>
        <image-upload></image-upload>
        <button @click="addRealty" class="btn btn-secondary mt-4 mb-4" type="button">Добавить квартиру</button>
    </div>
</template>

<script>
import ImageUpload from './ImageUpload.vue';
export default {
    components: {
        ImageUpload
    },
    computed: {
        getImages() {
            return this.$store.getters.getImages;
        }
    },

    methods: {
        addRealty() {
            this.apartment.images = this.getImages.slice();
            this.$store.dispatch('addApartment', this.apartment);
        }
    },
    data() {
        return {
            image: null,
            apartment: {
                name: '',
                object_type: 'old',
                housing_type: 1,
                apartment_type: 'flat',
                count_room: 1,
                price: 1000000,
                square: 10,
                floor: 1,
            },
            input_filters: {
                room_count: [
                    {
                        id: 1,
                        name: 'Студия',
                        rooms: 0
                    },
                    {
                        id: 2,
                        name: 'Свободная планировка',
                        rooms: 0
                    },
                    {
                        id: 3,
                        name: '1 комната',
                        rooms: 1
                    },
                    {
                        id: 4,
                        name: '2 комнаты',
                        rooms: 2
                    },
                    {
                        id: 5,
                        name: '3 комнаты',
                        rooms: 3
                    },
                    {
                        id: 6,
                        name: '4 комнаты',
                        rooms: 4
                    },
                    {
                        id: 7,
                        name: '5 комнат и более',
                        rooms: 5
                    },
                ],
                house_types: [
                    {
                        type: 1,
                        name: 'Кирпичный'
                    },
                    {
                        type: 2,
                        name: 'Панельный'
                    },
                    {
                        type: 3,
                        name: 'Блочный'
                    },
                    {
                        type: 4,
                        name: 'Монолитный'
                    },
                    {
                        type: 5,
                        name: 'Деревянный'
                    }
                ]
            }
        }
    },

}
</script>

<style>

</style>
