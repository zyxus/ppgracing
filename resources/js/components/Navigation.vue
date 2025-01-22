<template>


    <nav class="navbar fixed-bottom navbar-dark custom-navbar">
        <div class="container d-flex justify-content-evenly">
            <RouterLink to="/championships" class="custom-btn">
                <i class="fas fa-trophy custom-icon"></i>
                <small class="custom-text">Чемпионаты</small>
            </RouterLink>
            <RouterLink to="/profile" class="custom-btn">
                <i class="fas fa-user custom-icon"></i>
                <small class="custom-text">Профиль</small>
            </RouterLink>
        </div>
    </nav>


</template>

<script setup>
import { RouterLink } from 'vue-router';
</script>

<style scoped>
.custom-navbar {
    padding: 4px 0; /* Уменьшаем внутренние отступы, чтобы navbar стал ниже */
    height: 90px;
    display: flex;
    align-items: center;

    background: rgba(0, 0, 0, 0.6);
    backdrop-filter: blur(1px);
}

.custom-navbar .container {
    max-width: 400px;
    width: 100%;
}

.custom-btn {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-decoration: none;
    font-size: 12px;
}

.custom-icon {
    font-size: 20px;
}

.custom-text {
    font-size: 10px;
    margin-top: 5px;
}
</style>
