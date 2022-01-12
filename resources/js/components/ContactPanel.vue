<template>
    <ul class="nav justify-content-center contact-panel">
        <li class="nav-item" v-for="contact in contacts" :key="contact.name">
            <a class="nav-link" aria-current="page" :href="contact.url"> <i :class="contact.icon"></i> {{ contact.name }}</a>
        </li>
    </ul>
</template>

<script>
export default {
    data() {
        return {
            contacts: [
                {
                    name: 'footage102',
                    icon: 'fab fa-vk',
                    url: 'https://vk.com/footage102'
                },
                {
                    name: 'metragi-kumertau.ru@mail.ru',
                    icon: 'fas fa-at',
                    url: 'mailto:metragi-kumertau.ru@mail.ru'
                },
                {
                    name: 'metrazhi_nedvizhimost_kumertau',
                    icon: 'fab fa-instagram',
                    url: 'https://www.instagram.com/metrazhi_nedvizhimost_kumertau'
                }
            ],
        }
    },
}
</script>

<style>
.contact-panel {
    background-color: red;
    font-size: 1.4rem;
}
.contact-panel a:hover {
    color: white;
}
.contact-panel a {
    color: rgb(255, 214, 214);
}
</style>
