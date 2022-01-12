<template>
    <div>
        <contact-panel></contact-panel>
        <banner></banner>
        <navigation-panel></navigation-panel>
    </div>
</template>

<script>
import ContactPanel from "./ContactPanel.vue";
import Banner from "./Banner.vue";
import NavigationPanel from "./NavigationPanel.vue";

export default {
    components: {
        ContactPanel, Banner, NavigationPanel
    }
}
</script>

<style>

</style>
