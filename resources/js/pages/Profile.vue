<template>
    <Layout title="Профиль пользователя">
        <div class="text-center">
            <h1>Профиль пользователя</h1>
        </div>
        <div class="container mt-4">
            <div class="card mx-auto p-4 form-container">
                <!-- Фото пользователя -->
                <div class="d-flex flex-column align-items-center mb-4">
                    <div class="photo-container rounded-circle d-flex align-items-center justify-content-center mb-3">
                        <img
                            v-if="user.photo"
                            :src="user.photo"
                            alt="Фото пользователя"
                            class="img-fluid rounded-circle"
                            style="width: 150px; height: 150px; object-fit: cover;"
                        />
                        <i v-else class="fa fa-user fa-5x text-secondary"></i>
                    </div>
                    <label for="photo-upload" class="btn btn-outline-primary">Загрузить фото</label>
                    <input type="file" id="photo-upload" class="d-none" @change="uploadPhoto" />
                </div>

                <!-- Форма профиля -->
                <form @submit.prevent="saveProfile">
                    <!-- Имя -->
                    <div class="input-group mb-3">
                        <span class="input-group-text small" id="firstName-label">Имя</span>
                        <input type="text" id="firstName" v-model="user.firstName" class="form-control custom-input" required />
                    </div>

                    <!-- Фамилия -->
                    <div class="input-group mb-3">
                        <span class="input-group-text small" id="lastName-label">Фамилия</span>
                        <input type="text" id="lastName" v-model="user.lastName" class="form-control custom-input" required />
                    </div>

                    <!-- GT7 Nickname -->
                    <div class="input-group mb-3">
                        <span class="input-group-text small">GT7 Nickname</span>
                        <input type="text" id="nickname" v-model="user.nickname" class="form-control custom-input" required />
                    </div>

                    <!-- PSN -->
                    <div class="input-group mb-3">
                        <span class="input-group-text small">PSN</span>
                        <input type="text" id="psn" v-model="user.psn" class="form-control custom-input" required />
                    </div>

                    <!-- Страна  -->
                    <div class="input-group mb-3">
                        <span class="input-group-text small">Страна</span>
                        <input type="text" id="psn" v-model="user.country" class="form-control custom-input" required />
                    </div>

                    <!-- Город -->
                    <div class="input-group mb-3">
                        <span class="input-group-text small">Город</span>
                        <input type="text" id="psn" v-model="user.city" class="form-control custom-input" required />
                    </div>

                    <!-- Оборудование -->
                    <div class="input-group mb-3">
                        <span class="input-group-text small">Оборудование</span>
                        <input type="text" id="equipment" v-model="user.equipment" class="form-control custom-input" required />
                    </div>

                    <!-- Команда -->
                    <div class="input-group mb-3">
                        <span class="input-group-text small">Команда</span>
                        <input type="text" id="team" v-model="user.team" class="form-control custom-input" required />
                    </div>

                    <!-- Кнопка сохранения -->
                    <div class="d-flex justify-content-center mt-4">
                        <button type="submit" class="btn btn-primary custom-button">Сохранить изменения</button>
                    </div>
                </form>
            </div>
        </div>
    </Layout>
</template>

<script setup>
import Layout from '../layouts/Layout.vue';
import { reactive } from "vue";

const user = reactive({
    photo: null,
    firstName: "Алексей",
    lastName: "Иванов",
    nickname: "SpeedRacer",
    psn: "speedracer123",
    city: "Москва",
    country: "Россия",
    equipment: "Logitech G29",
    team: "Red Wheels",
});

// Функция загрузки фото
const uploadPhoto = (event) => {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = () => {
            user.photo = reader.result;
        };
        reader.readAsDataURL(file);
    }
};

// Функция сохранения профиля
const saveProfile = () => {
    alert("Изменения сохранены!");
};
</script>

<style scoped lang="scss">
@use '../../sass/app.scss' as *;

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
}

.form-container {
    background: $cardBg;
    border-radius: 10px;
    padding: 20px;
    backdrop-filter: blur(1px);
    max-width: 600px;
}

.photo-container {
    width: 150px;
    height: 150px;
    background-color: #f0f0f0;
    border: 2px solid #ddd;
    overflow: hidden;
}

.input-group-text {
    color: $white;
    width: 130px;
}

.custom-text {
    opacity: 0.5;
    text-align: center;
}

.custom-button {
    width: 100%;
}
</style>
