<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <nav class="navbar fixed-bottom navbar-dark custom-navbar">
        <div class="container d-flex justify-content-between">
            <Link href="/webapp" class="btn btn-secondary custom-btn d-flex flex-column align-items-center">
                <i class="fas fa-home custom-icon"></i>
                <small class="custom-text">Главная</small>
            </Link>
            <Link href="/webapp/register" class="btn btn-secondary custom-btn d-flex flex-column align-items-center">
                <i class="fas fa-trophy custom-icon"></i>
                <small class="custom-text">Регистрация</small>
            </Link>
            <Link href="/webapp/championships" class="btn btn-secondary custom-btn d-flex flex-column align-items-center">
                <i class="fas fa-trophy custom-icon"></i>
                <small class="custom-text">Чемпионаты</small>
            </Link>
            <Link href="/webapp/profile" class="btn btn-secondary custom-btn d-flex flex-column align-items-center">
                <i class="fas fa-user custom-icon"></i>
                <small class="custom-text">Профиль</small>
            </Link>
        </div>
    </nav>
</template>

<style scoped lang="scss">
@use "../../sass/app.scss" as *;

.custom-navbar {
    padding: 4px 0; /* Уменьшаем внутренние отступы, чтобы navbar стал ниже */
    height: 90px;
    display: flex;
    align-items: center;

    background: rgba(0, 0, 0, 0.2);
    backdrop-filter: blur(5px);
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
    color: $customPrimary !important;
}

.custom-icon {
    font-size: 20px;
}

.custom-text {
    font-size: 10px;
    margin-top: 5px;
}
</style>
