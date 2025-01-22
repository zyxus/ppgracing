<template>
    <nav class="navbar fixed-bottom navbar-dark border-top custom-navbar">
        <div class="container d-flex justify-content-evenly">
            <RouterLink to="/championships" class="btn btn-secondary custom-btn d-flex flex-column align-items-center">
                <i class="fas fa-trophy custom-icon"></i>
                <small class="custom-text">Чемпионаты</small>
            </RouterLink>
            <RouterLink to="/profile" class="btn btn-secondary custom-btn d-flex flex-column align-items-center">
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
    height: 120px;
    display: flex;
    align-items: center;

    background: rgba(0, 0, 0, 0.2);
    backdrop-filter: blur(1px);
}

.custom-navbar .container {
    max-width: 400px;
    width: 100%;
}

.custom-btn {
    min-width: 120px;
    padding: 10px 0;
    width: 100px;
    height: 90px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    font-size: 16px;
}

.custom-icon {
    font-size: 32px;
}

.custom-text {
    font-size: 14px;
    margin-top: 5px;
}
</style>
