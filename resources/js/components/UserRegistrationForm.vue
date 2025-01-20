<template>
    <form @submit.prevent="onSubmit" class="form">
        <TextInput label="PSN" />
        <TextInput label="GT7 Nickname" />
        <TextInput label="Имя" />
        <TextInput label="Фамилия" />
        <TextInput label="Город, страна" />
        <TextInput label="Оборудование (модель руля/геймпад)" />
        <TextInput label="Дата и время отборочного заезда" />
        <TextInput label="Команда" />
        <AppButton label="Submit" @click="onSubmit" />
    </form>
</template>

<script setup>
import TextInput from './TextInput.vue';
import AppButton from './AppButton.vue';

function onSubmit() {
    alert('Form submitted!');
}
</script>

<style scoped>
.form {
    max-width: 400px;
    margin: 0 auto;
    padding: 16px;
    display: flex;
    flex-direction: column;
}
</style>
