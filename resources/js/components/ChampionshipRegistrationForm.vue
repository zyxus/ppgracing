<template>
    <form @submit.prevent="onSubmit" class="form">
        <div class="mb-3">
            <label for="psn" class="form-label label-custom">PSN</label>
            <input type="text" id="psn" class="form-control custom-input" required />
        </div>

        <div class="mb-3">
            <label for="nickname" class="form-label label-custom">GT7 Nickname</label>
            <input type="text" id="nickname" class="form-control custom-input" required />
        </div>

        <div class="mb-3">
            <label for="firstName" class="form-label label-custom">Имя</label>
            <input type="text" id="firstName" class="form-control custom-input" required />
        </div>

        <div class="mb-3">
            <label for="lastName" class="form-label label-custom">Фамилия</label>
            <input type="text" id="lastName" class="form-control custom-input" required />
        </div>

        <div class="mb-3">
            <label for="location" class="form-label label-custom">Город, страна</label>
            <input type="text" id="location" class="form-control custom-input" required />
        </div>

        <div class="mb-3">
            <label for="equipment" class="form-label label-custom">Оборудование (модель руля/геймпад)</label>
            <input type="text" id="equipment" class="form-control custom-input" required />
        </div>

        <div class="mb-3">
            <label for="qualifyingDate" class="form-label label-custom">Дата и время отборочного заезда</label>
            <input type="datetime-local" id="qualifyingDate" class="form-control custom-input" required />
        </div>

        <div class="mb-3">
            <label for="team" class="form-label label-custom">Команда</label>
            <input type="text" id="team" class="form-control custom-input" />
        </div>

        <button type="submit" class="btn btn-primary btn-lg custom-button">Регистрация</button>
    </form>
    <AppButton />
</template>

<script setup>
function onSubmit() {
    alert("Form submitted!");
}
</script>

<style scoped lang="scss">
@use '../../sass/colors.scss' as *;

.custom-button {
    width: 100%;
    margin: 32px 0 0;
    border-radius: 5px;
    background-color: $primaryCustom;
    border: none;
    color: $textCustom;

    &:hover {
        background-color: $primaryCustomHover;
        color: $textCustom;
    }
}

.form {
    max-width: 400px;
    margin: 0 auto;
    padding: 16px;
}

.label-custom {
    color: $textCustom;
}

.custom-input:focus {
    border-color: $primaryCustom;
    box-shadow: 0 0 0 0.1rem $primaryCustomHover;
}
</style>
