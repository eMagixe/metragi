<template>
    <div>
        <div class="progress" style="height: 40px">
            <div class="progress-bar" role="progressbar" :style="'width:'+getFiles.progress+'%'">{{ getFiles.current }}</div>
        </div>
        <hr>
        <div class="input-group mb-3">
            <input type="file" class="form-control" id="images" ref="file" multiple @change="fileInputChange">
            <label class="input-group-text" for="images">Выбрать</label>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h3 class="text-center">Файлы в очереди ({{getFiles.order.length}})</h3>
                <ul class="list-group">
                    <li class="list-group-item" v-for="file in getFiles.order" :key="file.name">
                        {{ file.name }} : {{ file.type }}
                    </li>
                </ul>
            </div>
            <div class="col-sm-6">
                <h3 class="text-center">Загруженные файлы ({{getFiles.finish.length}})</h3>
                <ul class="list-group">
                    <li class="list-group-item" v-for="file in getFiles.finish" :key="file.name">
                        {{ file.name }} : {{ file.type }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    computed: {
        getFiles() {
            return this.$store.getters.getFiles;
        }
    },
    methods: {
        async fileInputChange() {
            this.$store.dispatch('fileInputChange', this.$refs.file.files);
        }
    }
}
</script>

<style>

</style>
