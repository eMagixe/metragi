<template>
    <div class="m-3">
        <div class="form-check">
            <h5>Количество комнат</h5>
            <div v-for="item in input_filters.room_count" :key="'room_' + item.id">
                <input v-model="filters.count_room" class="form-check-input" type="checkbox" :value="item.rooms" :id="item.id">
                <label class="form-check-label" :for="item.id">
                    {{ item.name }}
                </label>
            </div>
            <h5>Цена</h5>
            <div class="input-group">
                <input v-model="filters.price_start" type="text" aria-label="От" class="form-control" placeholder="От">
                <input v-model="filters.price_final" type="text" aria-label="До" class="form-control" placeholder="До">
            </div>
            <h5>Тип объекта</h5>
            <div class="btn-group" role="group" aria-label="object_type">
                <input v-model="filters.object_type" type="radio" aria-label="radio" value="all" class="btn-check" name="object_type" id="all" autocomplete="off">
                <label class="btn btn-outline-secondary" for="all">Все</label>
                <input v-model="filters.object_type" type="radio" class="btn-check" value="old" name="object_type" id="old" autocomplete="off">
                <label class="btn btn-outline-secondary" for="old">Вторичка</label>
                <input v-model="filters.object_type" type="radio" class="btn-check" value="new" name="object_type" id="new" autocomplete="off">
                <label class="btn btn-outline-secondary" for="new">Новостройка</label>
            </div>
            <h5>Общая площадь, м<sup>3</sup></h5>
            <div class="input-group">
                <input v-model="filters.square_start" type="text" aria-label="От" class="form-control" placeholder="От">
                <input v-model="filters.square_final" type="text" aria-label="До" class="form-control" placeholder="До">
            </div>
            <h5>Этажей в доме</h5>
            <div class="input-group">
                <input v-model="filters.floor_start" type="text" aria-label="От" class="form-control" placeholder="От">
                <input v-model="filters.floor_final" type="text" aria-label="До" class="form-control" placeholder="До">
            </div>
            <h5>Тип жилья</h5>
            <div class="btn-group" role="group" aria-label="apartment_type">
                <input v-model="filters.apartment_type" value="all" type="radio" class="btn-check" name="apartment_type" id="all_house" autocomplete="off" checked>
                <label class="btn btn-outline-secondary" for="all_house">Все</label>
                <input v-model="filters.apartment_type" value="flat" type="radio" class="btn-check" name="apartment_type" id="flat" autocomplete="off">
                <label class="btn btn-outline-secondary" for="flat">Квартиры</label>
                <input v-model="filters.apartment_type" value="apartment" type="radio" class="btn-check" name="apartment_type" id="apartment" autocomplete="off">
                <label class="btn btn-outline-secondary" for="apartment">Апартаменты</label>
            </div>
            <h5>Тип дома</h5>
            <div v-for="item in input_filters.house_types" :key="item.name">
                <input v-model="filters.housing_type" class="form-check-input" type="checkbox" :value="item.type" :id="item.name">
                <label class="form-check-label" :for="item.name">
                    {{ item.name }}
                </label>
            </div>
        </div>
        <div class="d-grid gap-2 mt-4">
            <button @click="filterApartments" class="btn btn-secondary" type="button">Показать результаты</button>
        </div>
    </div>
</template>

<script>

export default {
    methods: {
        filterApartments() {
            this.$store.dispatch('filterApartments', this.filters);
        }
    },
    data() {
        return {
            filters: {
                count_room: [0, 1, 2, 3, 4, 5],
                price_start: 1000000,
                price_final: 2000000,
                object_type: 'all',
                square_start: 10,
                square_final: 60,
                floor_start: 1,
                floor_final: 9,
                apartment_type: 'all',
                housing_type: [1, 2, 3, 4, 5],
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
h5 {
    margin-top: 1rem;
    margin-bottom: 1rem;
}
</style>
