<template>
    <div class="greeting">
        <h1>Привет, мир!</h1>
        <button class="mdc-button mdc-button--raised">
            <span class="mdc-button__label">Нажми меня!</span>
        </button>
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
