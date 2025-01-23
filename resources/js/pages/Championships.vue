<script setup>
import Layout from '../layouts/Layout.vue';
import ChampionshipsListing from "../components/ChampionshipsListing.vue"; // Импортируем компонент листинга
</script>

<template>
    <Layout title="Чемпионаты">
        <div class="container text-center">
            <h1>Чемпионаты</h1>
        </div>

        <!-- Добавляем листинг чемпионатов -->
        <div class="container mt-4">
            <ChampionshipsListing />
        </div>
    </Layout>
</template>
