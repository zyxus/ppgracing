
<script>
import RegisterButton from "./RegisterButton.vue";

export default {
    components: {RegisterButton},
    mounted() {
        // Для базовой кнопки можно не использовать дополнительную настройку
    }
};
</script>

<template>
    <div class="container">
        <md-filled-text-field required label="PSN"></md-filled-text-field>
        <md-filled-text-field required label="GT7 Nickname" ></md-filled-text-field>
        <md-filled-text-field required label="Имя"></md-filled-text-field>
        <md-filled-text-field required label="Фамилия"></md-filled-text-field>
        <md-filled-text-field required label="Город, страна"></md-filled-text-field>
        <md-filled-text-field required label="Оборудование (модель руля/геймпад)"></md-filled-text-field>
        <md-filled-text-field required label="Дата и время отборочного заезда"></md-filled-text-field>
        <md-filled-text-field required label="Команда"></md-filled-text-field>

        <RegisterButton />

    </div>
</template>


<style scoped>


    /* Стили для текстовых полей */
md-filled-text-field {
    --md-sys-color-surface: #fff; /* Белый фон */
    --md-sys-color-on-surface: #000; /* Черный текст */
    --md-sys-color-outline: #ccc; /* Серый контур */
    --md-filled-text-field-focus-active-indicator-color: #e17740;
    --md-filled-text-field-focus-active-label-text-color: #e17740;

    font-family: 'Roboto', sans-serif;
}
</style>
