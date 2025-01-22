<script setup>
import Layout from '../layouts/Layout.vue';

import { ref } from 'vue';

const name = ref('');
const surname = ref('');

const focusNext = (nextInput) => {
    const nextElement = document.querySelector(`input[name="${nextInput}"]`);
    if (nextElement) {
        nextElement.focus();
    }
};

const submitForm = () => {
    alert("Форма отправлена!");
};
</script>

<template>
<!--    <Layout title="Регистрация" hideNavbar>-->
    <Layout title="Регистрация">
        <div class="container">

            <div class="card mx-auto p-4 form-container">

                <h5>Привет гонщик!</h5>

                <p class="small mt-3 mb-4">Зарегистрируйся, чтобы получить доступ к чемпионатам и все такое...</p>

                <form @submit.prevent="onSubmit" class="form">

                    <div class="input-group mb-3">
                        <span class="input-group-text small" id="name">Имя</span>
                        <input type="text"
                               id="firstName"
                               class="form-control custom-input"
                               v-model="name"
                               enterkeyhint="next"
                               @keydown.enter.prevent="focusNext('surname')"
                               required />
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text small" id="surname">Фамилия</span>
                        <input type="text"
                               id="lastName"
                               class="form-control custom-input"
                               v-model="surname"
                               enterkeyhint="done"
                               required />
                    </div>

                    <div class="input-group">
                        <select class="form-select"
                                aria-label="Выбери страну"

                                required>
                            <option selected>Cтрана</option>
                            <option>Австрия</option>
                            <option>Германия</option>
                            <option>Дания</option>
                            <option>Россия</option>
                            <option>Южная Африка</option>
                        </select>

                        <select class="form-select"
                                aria-label="Выбери город"
                                required>
                            <option selected>Город</option>
                            <option>Астрахань</option>
                            <option>Белгород</option>
                            <option>Москва</option>
                            <option>Санкт-Петербург</option>
                            <option>Ярославль</option>
                        </select>
                    </div>

                    <div class="d-flex justify-content-center mt-4">
                        <button type="submit"
                                class="btn btn-primary custom-button">Зарегистрироваться</button>
                    </div>

                    <p class="small mt-3 mb-4">
                        <small class="text-xs custom-text text-center d-block">
                            Регистрируясь в системе, ты принимаешь нашу политику обработки персональных данных, которая
                            заключается в том, что ты предоставляешь нам все данные на свой страх и риск <i class="fas fa-laugh"></i>
                        </small>
                    </p>

                    <button type="submit" style="position: absolute; left: -9999px;">Готово</button>

                </form>

                <AppButton />

            </div>

        </div>

    </Layout>

</template>

<style scoped lang="scss">
#name, #surname {
    width: 100px;
}
.custom-text {
    opacity: 0.5;
    text-align: center;
}
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 20px;
}
.form-container {
    background: rgba(0, 0, 0, 0.65);
    border-radius: 10px;
    padding: 20px;
    backdrop-filter: blur(1px);
}

</style>
