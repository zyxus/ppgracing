<template>
    <div class="container mt-4">
        <div v-for="(item, index) in blogItems" :key="index">
            <ChampionshipsListingItem
                :title="item.title"
                :startDate="item.startDate"
                :carType="item.carType"
                :description="item.description"
                :logo="item.logo"
            />
        </div>
    </div>
</template>

<script setup>
import ChampionshipsListingItem from "./ChampionshipsListingItem.vue";

// Массив с данными для примера
const blogItems = [
    {
        title: "Пивная Лига",
        startDate: "2025-02-15",
        carType: 'Монокласс',
        description: "Участвуйте в лучшем чемпионате для про-геймеров.",
        logo: "/images/poster1.png",
    },
    {
        title: "Aura Cup",
        startDate: "2025-03-01",
        carType: 'Гр.2',
        description: "Чемпионат для всех любителей скорости.",
        logo: "/images/poster2.png",
    },
];
</script>
