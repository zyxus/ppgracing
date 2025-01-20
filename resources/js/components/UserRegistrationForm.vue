<template>
    <form @submit.prevent="onSubmit" class="form">
        <div class="mb-3">
            <label for="psn" class="form-label">PSN</label>
            <input type="text" id="psn" class="form-control" required />
        </div>

        <div class="mb-3">
            <label for="nickname" class="form-label">GT7 Nickname</label>
            <input type="text" id="nickname" class="form-control" required />
        </div>

        <div class="mb-3">
            <label for="firstName" class="form-label">Имя</label>
            <input type="text" id="firstName" class="form-control" required />
        </div>

        <div class="mb-3">
            <label for="lastName" class="form-label">Фамилия</label>
            <input type="text" id="lastName" class="form-control" required />
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Город, страна</label>
            <input type="text" id="location" class="form-control" required />
        </div>

        <div class="mb-3">
            <label for="equipment" class="form-label">Оборудование (модель руля/геймпад)</label>
            <input type="text" id="equipment" class="form-control" required />
        </div>

        <div class="mb-3">
            <label for="qualifyingDate" class="form-label">Дата и время отборочного заезда</label>
            <input type="datetime-local" id="qualifyingDate" class="form-control" required />
        </div>

        <div class="mb-3">
            <label for="team" class="form-label">Команда</label>
            <input type="text" id="team" class="form-control" />
        </div>

        <button type="submit" class="btn btn-primary w-100">Submit</button>
    </form>
</template>

<script setup>
function onSubmit() {
    alert("Form submitted!");
}
</script>

<style scoped>
.form {
    max-width: 400px;
    margin: 0 auto;
    padding: 16px;
}
</style>
