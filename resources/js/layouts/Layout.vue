<script setup>
import Navigation from '../components/Navigation.vue';

const props = defineProps({
    title: String,
    hideNavbar: Boolean // Новый пропс, который управляет показом Navbar
});
</script>

<template>
    <div class="app-container">
        <slot />
        <Navigation v-if="!hideNavbar" /> <!-- Показывать Navbar, если hideNavbar === false -->
    </div>
</template>

<style scoped lang="scss">
.app-container {
    padding: 16px 0 90px 0;
}
</style>
