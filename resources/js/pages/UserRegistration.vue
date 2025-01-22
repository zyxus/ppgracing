<script setup>
import Layout from '../layouts/Layout.vue';
import { ref } from 'vue';

const firstNameInput = ref(null);
const lastNameInput = ref(null);

const focusNext = (nextRef) => {
    if (nextRef.value) {
        nextRef.value.focus();
    }
};

const hideKeyboard = () => {
    document.activeElement.blur();
};
</script>

<template>
    <Layout title="Регистрация">
        <div class="container">
            <div class="card mx-auto p-4 form-container">
                <h5>Привет гонщик!</h5>
                <p class="small mt-3 mb-4">Зарегистрируйся, чтобы получить доступ к чемпионатам и все такое...</p>

                <form @submit.prevent class="form">
                    <!-- Имя -->
                    <div class="input-group mb-3">
                        <span class="input-group-text small" id="name">Имя</span>
                        <input type="text"
                               ref="firstNameInput"
                               class="form-control custom-input"
                               enterkeyhint="next"
                               @keydown.enter.prevent="focusNext(lastNameInput)"
                               required />
                    </div>

                    <!-- Фамилия -->
                    <div class="input-group mb-3">
                        <span class="input-group-text small" id="surname">Фамилия</span>
                        <input type="text"
                               ref="lastNameInput"
                               class="form-control custom-input"
                               enterkeyhint="done"
                               @keydown.enter.prevent="hideKeyboard"
                               required />
                    </div>

                    <!-- Страна и город -->
                    <div class="input-group">
                        <select class="form-select" aria-label="Выбери страну" required>
                            <option selected>Cтрана</option>
                            <option>Австрия</option>
                            <option>Германия</option>
                            <option>Дания</option>
                            <option>Россия</option>
                            <option>Южная Африка</option>
                        </select>

                        <select class="form-select" aria-label="Выбери город" required>
                            <option selected>Город</option>
                            <option>Астрахань</option>
                            <option>Белгород</option>
                            <option>Москва</option>
                            <option>Санкт-Петербург</option>
                            <option>Ярославль</option>
                        </select>
                    </div>

                    <!-- Кнопка регистрации -->
                    <div class="d-flex justify-content-center mt-4">
                        <button type="submit" class="btn btn-primary custom-button">Зарегистрироваться</button>
                    </div>

                    <!-- Текст внизу -->
                    <p class="small mt-3 mb-4">
                        <small class="text-xs custom-text text-center d-block">
                            Регистрируясь в системе, ты принимаешь нашу политику обработки персональных данных, которая
                            заключается в том, что ты предоставляешь нам все данные на свой страх и риск <i class="fas fa-laugh"></i>
                        </small>
                    </p>
                </form>
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
