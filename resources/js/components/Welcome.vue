<template>
    <div class="greeting">
        <h1>Привет, мир!</h1>
        <md-filled-button label="Нажми меня!">Нажми меня!</md-filled-button>
    </div>
</template>

<script>
export default {
    mounted() {
        // Для базовой кнопки можно не использовать дополнительную настройку
    }
};
</script>

<style scoped>
.greeting {
    text-align: center;
    margin-top: 50px;
}
</style>
