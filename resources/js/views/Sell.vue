<template>
    <div><Button @click="addRealty">Добавить</Button></div>
</template>

<script>
export default {
    methods: {
        addRealty() {
            this.$store.dispatch('addApartment', {
                name: 'test 3',
                object_type: 'new',
                housing_type: 'housing_type 3',
                apartment_type: 'apartment_type 3',
                count_room: 2,
                price: 2500000,
                square: 60,
                floor: 2,
            });
        }
    }
}
</script>

<style>

</style>
