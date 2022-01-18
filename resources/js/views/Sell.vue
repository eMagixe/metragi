<template>
    <div class="container">
        <h2 class="m-3">Хочу продать</h2>
        <select v-model="type_realty" class="form-select" aria-label="Хочу продать">
            <option selected value="apartment">Квартира</option>
            <option value="room">Комната</option>
            <option value="house">Дачи, дома, коттеджи</option>
            <option value="garage">Гаражи и машиноместа</option>
            <option value="plot">Земельные участки</option>
            <option value="commercial">Коммерческая недвижимость</option>
        </select>

        <apartment-create v-if="type_realty==='apartment'"></apartment-create>
    </div>
</template>

<script>
import ApartmentCreate from "../components/ApartmentCreate.vue";

export default {
    components: {
        ApartmentCreate
    },
    data() {
        return {
            type_realty: 'apartment',
        }
    }
}
</script>

<style>

</style>
