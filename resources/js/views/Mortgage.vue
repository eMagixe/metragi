<template>
    <div class="container">
        <div class="form-check mt-5">
            <h5>ФИО</h5>
            <div class="input-group">
                <input v-model="name" type="text" aria-label="ФИО" class="form-control" placeholder="ФИО">
            </div>
            <h5>Телефон</h5>
            <div class="input-group">
                <input v-model="phone" type="text" aria-label="Телефон" class="form-control" placeholder="Телефон">
            </div>
            <h5>Хочу купить</h5>
            <select v-model="realty" class="form-select" aria-label="Хочу  купить">
                <option selected value="apartment">Квартира</option>
                <option value="room">Комната</option>
                <option value="house">Дачи, дома, коттеджи</option>
                <option value="garage">Гаражи и машиноместа</option>
                <option value="plot">Земельные участки</option>
                <option value="commercial">Коммерческая недвижимость</option>
            </select>

            <button @click="addMortgage" class="btn btn-secondary mt-4 mb-4" type="button">Оставить заявку</button>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            name: '',
            phone: '',
            realty: ''
        }
    },
    methods: {
        addMortgage() {
            this.$store.dispatch('addMortgage', { name: this.name, phone: this.phone, realty: this.realty });
        }
    },
}
</script>

<style>

</style>
