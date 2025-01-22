<template>

    <div class="container-wrapper">

        <div class="container">

            <div class="card mx-auto p-4 form-container">

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

                    <div class="d-flex justify-content-center mt-4">
                        <button type="submit" class="btn btn-primary custom-button">Зарегистрироваться</button>
                    </div>

                    <p class="small mt-3 mb-4">
                        <small class="text-xs custom-text text-center d-block">
                            Регистрируясь в системе, ты принимаешь нашу политику обработки персональных данных, которая
                            заключается в том, что ты предоставляешь нам все данные на свой страх и риск <i class="fas fa-laugh"></i>
                        </small>
                    </p>


                </form>

                <AppButton />

            </div>

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


.container-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    overflow: hidden; // убирает лишний скролл
}

.container {
    max-width: 100%;
    transition: transform 0.3s ease-in-out;
}

/* 🔹 Уменьшаем форму для десктопных приложений */
@media (min-width: 768px) {
    .container {
        transform: scale(0.85); /* Измени на нужный масштаб */
    }
}

@media (min-width: 1024px) {
    .container {
        transform: scale(0.75); /* Ещё меньше для больших экранов */
    }
}

</style>
