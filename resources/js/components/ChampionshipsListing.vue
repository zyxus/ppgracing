<template>
    <div class="container mt-4">
        <div v-for="(item, index) in blogItems" :key="index">
            <ChampionshipsListingItem
                :title="item.title"
                :startDate="item.startDate"
                :endDate="item.endDate"
                :carType="item.carType"
                :description="item.description"
                :logo="item.logo"
                :initialParticipation="item.initialParticipation"
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
        startDate: "15.02.2025",
        endDate: "15.03.2025",
        carType: 'Монокласс',
        description: "Участвуйте в лучшем чемпионате для про-геймеров.",
        logo: "/images/poster1.png",
        initialParticipation: true,
    },
    {
        title: "Aura Cup",
        startDate: "01.03.2025",
        endDate: "01.05.2025",
        carType: 'Гр.2',
        description: "Чемпионат для всех любителей скорости.",
        logo: "/images/poster2.png",
        initialParticipation: false
    },
    {
        title: "Aura Cup",
        startDate: "01.03.2025",
        endDate: "01.05.2025",
        carType: 'Гр.2',
        description: "Чемпионат для всех любителей скорости.",
        logo: null,
        initialParticipation: false
    },
];
</script>
