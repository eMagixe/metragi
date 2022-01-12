<template>
    <ul class="nav nav-fill mt-3 navigation-panel">
        <li class="nav-item">
            <router-link class="nav-link" aria-current="page" to="/"><i class="fas fa-plus-circle"></i> КУПИТЬ</router-link>
        </li>
        <li class="nav-item border-center">
            <router-link class="nav-link" aria-current="page" to="/sell"><i class="fas fa-minus-circle"></i> ПРОДАТЬ</router-link>
        </li>
        <li class="nav-item">
            <router-link class="nav-link" aria-current="page" to="/ipoteka"><i class="fas fa-clipboard-list"></i> ЗАЯВКИ НА ИПОТЕКУ</router-link>
        </li>
    </ul>
</template>

<script>
export default {

}
</script>

<style scoped>
.border-center {
    border-left: 1px solid rgb(255, 94, 94);
    border-right: 1px solid rgb(255, 94, 94);
}
.navigation-panel {
    background-color: red;
    font-size: 1.4rem;
}
.nav-item:hover {
    background-color: #ccc;
    color: #000;
}
.nav-item a {
    color: white;
    margin-bottom: .5rem;
    margin-top: .5rem;
}
.nav-item a:hover {
    color: #000;
}
</style>
