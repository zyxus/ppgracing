<template>
    <Layout>
        <div class="container mt-5">
            <h1 class="mb-4 text-center">Профиль пользователя</h1>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center mb-4">
                        <div
                            class="photo-container rounded-circle d-flex align-items-center justify-content-center mb-3"
                        >
                            <img
                                v-if="user.photo"
                                :src="user.photo"
                                alt="Фото пользователя"
                                class="img-fluid rounded-circle"
                                style="width: 150px; height: 150px; object-fit: cover;"
                            />
                            <i v-else class="fa fa-user fa-5x text-secondary"></i>
                        </div>
                        <label for="photo-upload" class="btn btn-outline-primary">
                            Загрузить фото
                        </label>
                        <input
                            type="file"
                            id="photo-upload"
                            class="d-none"
                            @change="uploadPhoto"
                        />
                    </div>

                    <!-- Редактируемые поля -->
                    <form
                        @submit.prevent="saveProfile"
                        class="mb-3"
                    >
                        <div class="mb-3">
                            <label for="firstName" class="form-label">Имя</label>
                            <input
                                type="text"
                                id="firstName"
                                v-model="user.firstName"
                                class="form-control"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="lastName" class="form-label">Фамилия</label>
                            <input
                                type="text"
                                id="lastName"
                                v-model="user.lastName"
                                class="form-control"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="nickname" class="form-label">GT7 Nickname</label>
                            <input
                                type="text"
                                id="nickname"
                                v-model="user.nickname"
                                class="form-control"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="psn" class="form-label">PSN</label>
                            <input
                                type="text"
                                id="psn"
                                v-model="user.psn"
                                class="form-control"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">Город</label>
                            <input
                                type="text"
                                id="city"
                                v-model="user.city"
                                class="form-control"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="country" class="form-label">Страна</label>
                            <input
                                type="text"
                                id="country"
                                v-model="user.country"
                                class="form-control"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="equipment" class="form-label">Оборудование</label>
                            <input
                                type="text"
                                id="equipment"
                                v-model="user.equipment"
                                class="form-control"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="team" class="form-label">Команда</label>
                            <input
                                type="text"
                                id="team"
                                v-model="user.team"
                                class="form-control"
                            />
                        </div>

                        <button type="submit" class="btn btn-primary w-100 mt-3">
                            Сохранить изменения
                        </button>
                    </form>
                </div>
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

const uploadPhoto = (event) => {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = () => {
            user.photo = reader.result; // Загружаем фото в user.photo
        };
        reader.readAsDataURL(file);
    }
};

const saveProfile = () => {
    alert("Изменения сохранены!");
};
</script>

<style scoped lang="scss">
@use '../../sass/app.scss' as *;

.card {
    max-width: 600px;
    margin: 0 auto;
    padding: 16px;
    background-color: $body-bg;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

input[type="file"] {
    display: none;
}
</style>
