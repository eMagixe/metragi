<template>
    <div class="container-fluid p-3 mt-2">
        <div class="row">
            <div class="col-3">
                <realty-list></realty-list>
            </div>
            <div class="col-9">
                <content-list></content-list>
            </div>
        </div>
    </div>
</template>

<script>
import RealtyList from "../components/RealtyList.vue";
import ContentList from "../components/ContentList.vue";

export default {
    components: {
        RealtyList, ContentList
    }
}
</script>

<style>

</style>
