<template>
    <nav class="navbar fixed-bottom navbar-light bg-light border-top">
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
.navbar {
    box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
}

.container {
    width: 400px;
}

.custom-btn {
    width: 50%;
    text-align: center;
}
</style>
