<template>
   <div>
        <ul class="list-group list-group-flush">
            <li @click="filters_group = realty.id" class="list-group-item" v-for="realty in realtyList" :key="realty.id">
                {{ realty.name }}
            </li>
        </ul>
        <div class="filters">
            <apartament-filters v-if="filters_group === 1"></apartament-filters>
        </div>
    </div>
</template>

<script>
import ApartamentFilters from "./ApartamentFilters.vue";
export default {
    components: {
        ApartamentFilters
    },
    data() {
        return {
            filters_group: 1,
            realtyList: [
                {
                    id: 1,
                    name: 'Квартиры',
                },
                {
                    id: 2,
                    name: 'Комнаты',
                },
                {
                    id: 3,
                    name: 'Дома, дачи, коттеджи',
                },
                {
                    id: 4,
                    name: 'Гаражи и машиноместа',
                },
                {
                    id: 5,
                    name: 'Земельные участки',
                },
                {
                    id: 6,
                    name: 'Коммерческая недвижимость',
                }
            ],
        }
    },
}
</script>

<style>
.list-group-item:hover {
    background-color: #ccc;
    cursor: pointer;
}
</style>
