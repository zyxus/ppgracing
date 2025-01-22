<template>
    <nav class="navbar fixed-bottom navbar-dark bg-dark border-top">
        <div class="container d-flex justify-content-between">
            <RouterLink to="/" class="btn btn-primary custom-btn">Регистрация</RouterLink>
            <RouterLink to="/championships" class="btn btn-secondary custom-btn">Чемпионаты</RouterLink>
        </div>
    </nav>
</template>

<script setup>
import { RouterLink } from 'vue-router';
</script>

<style scoped>
</style>
