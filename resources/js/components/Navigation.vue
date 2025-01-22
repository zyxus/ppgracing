<template>
    <nav class="navbar fixed-bottom navbar-dark bg-dark border-top">
        <div class="container d-flex justify-content-between">
            <RouterLink to="/championships" class="btn btn-secondary custom-btn">
                <i class="fas fa-trophy"></i>
            </RouterLink>
            <RouterLink to="/championships" class="btn btn-secondary custom-btn">
                <i class="fas fa-user"></i>
            </RouterLink>
        </div>
    </nav>
</template>

<script setup>
import { RouterLink } from 'vue-router';
</script>

<style scoped>
</style>
