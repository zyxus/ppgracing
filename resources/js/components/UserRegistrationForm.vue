<template>

    <div class="container">

        <div class="card mx-auto mt-4 p-4">

            <h5>Привет гонщик!</h5>

            <p class="small mt-3 mb-4">Для начала зарегистрируйся, чтобы получить доступ к чемпионатам и все такое...</p>

            <form @submit.prevent="onSubmit" class="form">

                <div class="input-group mb-3">
                    <span class="input-group-text small" id="name">Имя</span>
                    <input type="text" id="firstName" class="form-control custom-input" required />
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text small" id="surname">Фамилия</span>
                    <input type="text" id="lastName" class="form-control custom-input" required />
                </div>

                <div class="input-group">
                    <select class="form-select" aria-label="Выбери страну" required>
                        <option>Cтрана</option>
                        <option>Австрия</option>
                        <option>Германия</option>
                        <option>Дания</option>
                        <option>Россия</option>
                        <option>Южная Африка</option>
                    </select>

                    <select class="form-select" aria-label="Выбери город" required>
                        <option>Город</option>
                        <option>Астрахань</option>
                        <option>Белгород</option>
                        <option>Москва</option>
                        <option>Санкт-Петербург</option>
                        <option>Ярославль</option>
                    </select>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary custom-button">Зарегистрироваться</button>
                </div>
            </form>

            <AppButton />

        </div>
    </div>
</template>

<script setup>
function onSubmit() {
    alert("Form submitted!");
}
</script>

<style scoped lang="scss">
#name, #surname {
    width: 100px;
}
</style>
