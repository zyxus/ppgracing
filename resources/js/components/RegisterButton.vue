<script setup>

</script>

<template>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=person_add" />
    <md-branded-fab label="Регистрация"><md-icon slot="icon">person_add</md-icon></md-branded-fab>
</template>

<style scoped>
/* Делаем md-branded-fab выглядеть как обычную кнопку */
md-branded-fab {
    --md-sys-color-surface-container-high: #E17740;
    --md-sys-color-on-surface: #ffdb00;
    --md-sys-color-primary: #6a0000;

    --md-fab-branded-label-text-font: 'Roboto', sans-serif;
    --md-fab-branded-label-text-color: #FFFFFF;
    --md-fab-branded-label-text-weight: 500; /* Чуть жирнее */
    width: 100%; /* Растягиваем кнопку на всю ширину */
    height: 50px; /* Фиксированная высота, как на скриншоте */
}

md-icon {
    --md-icon-text-color: #FFF;
}
</style>

