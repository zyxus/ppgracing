
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
        <div>
            <md-filled-text-field required label="PSN"></md-filled-text-field>
        </div>
        <div>
            <md-filled-text-field required label="GT7 Nickname" ></md-filled-text-field>
        </div>
        <div>
            <md-filled-text-field required label="Имя"></md-filled-text-field>
        </div>
        <div>
            <md-filled-text-field required label="Фамилия"></md-filled-text-field>
        </div>
        <div>
            <md-filled-text-field required label="Город, страна"></md-filled-text-field>
        </div>
        <div>
            <md-filled-text-field required label="Оборудование (модель руля/геймпад)"></md-filled-text-field>
        </div>
        <div>
            <md-filled-text-field required label="Дата и время отборочного заезда"></md-filled-text-field>
        </div>
        <div>
            <md-filled-text-field required label="Команда"></md-filled-text-field>
        </div>

        <RegisterButton />

    </div>
</template>


<style scoped>
</style>
