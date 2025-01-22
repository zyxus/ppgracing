<template>

    <div class="card mt-4 p-4">

        <h5>Привет гонщик!</h5>

        <p>Для начала зарегистрируйся, чтобы получить доступ к чемпионатам и все такое...</p>

        <form @submit.prevent="onSubmit" class="form">

            <div class="mb-3">
                <label for="firstName" class="form-label label-custom">Имя</label>
                <input type="text" id="firstName" class="form-control custom-input" required />
            </div>

            <div class="mb-3">
                <label for="lastName" class="form-label label-custom">Фамилия</label>
                <input type="text" id="lastName" class="form-control custom-input" required />
            </div>

            <div class="mb-3">
                <label for="location" class="form-label label-custom">Cтрана</label>
                <select class="form-select" aria-label="Выбери страну" required>
                    <option>Австрия</option>
                    <option>Германия</option>
                    <option>Дания</option>
                    <option>Россия</option>
                    <option>Южная Африка</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="location" class="form-label label-custom">Город</label>
                <select class="form-select" aria-label="Выбери город" required>
                    <option>Астрахань</option>
                    <option>Белгород</option>
                    <option>Москва</option>
                    <option>Санкт-Петербург</option>
                    <option>Ярославль</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary custom-button">Зарегистрироваться</button>
        </form>
        <AppButton />

    </div>
</template>

<script setup>
function onSubmit() {
    alert("Form submitted!");
}
</script>

<style scoped lang="scss">
//@use '../../sass/colors.scss' as *;
//
//.custom-button {
//    width: 100%;
//    margin: 32px 0 0;
//    border-radius: 5px;
//    background-color: $primaryCustom;
//    border: none;
//    color: $textCustom;
//
//    &:hover {
//        background-color: $primaryCustomHover;
//        color: $textCustom;
//    }
//}
//
//.form {
//    max-width: 400px;
//    margin: 0 auto;
//    padding: 16px;
//}
//
//.label-custom {
//    color: $textCustom;
//}
//
//.custom-input:focus {
//    border-color: $primaryCustom;
//    box-shadow: 0 0 0 0.1rem $primaryCustomHover;
//}
</style>
