<template>
    <div class="card mb-3 card-custom">
        <div class="row g-0">
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title">{{ title }}</h3>
                    <div class="card-text d-flex justify-content-between mb-2">
                        <div><strong>{{ carType }}</strong></div>
                        <div><strong>{{ startDate }} - {{ endDate }}</strong></div>
                    </div>
                    <p class="card-text">
                        {{ description }}
                    </p>

                    <button
                        class="btn"
                        :class="isParticipating ? 'btn-success' : 'btn-primary'"
                        @click="toggleParticipation"
                    >
                        <span v-if="isParticipating">
                            <i class="fa fa-check"></i>&nbsp;&nbsp;&nbsp;Участвуете
                        </span>
                        <span v-else>
                            Участвовать
                        </span>
                    </button>
                </div>
            </div>
            <div
                v-if="logo"
                class="col-md-4 d-flex align-items-center justify-content-center"
            >
                <img :src="logo" class="img-fluid rounded" alt="Логотип чемпионата" />
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from "vue";
import { defineProps } from "vue";

// Пропсы для компонента
const props = defineProps({
    title: { type: String, required: true },
    startDate: { type: String, required: true },
    endDate: { type: String, required: true },
    carType: { type: String, required: true },
    description: { type: String, required: true },
    logo: { type: String, required: false },
    initialParticipation: { type: Boolean, default: false }, // Участвует ли пользователь изначально
});

// Локальное состояние участия
const isParticipating = ref(props.initialParticipation);

// Функция переключения участия
const toggleParticipation = () => {
    isParticipating.value = !isParticipating.value;
};
</script>


<style scoped lang="scss">
@use '../../sass/app.scss' as *;
.card {
    border: 1px solid #ddd;
    border-radius: 8px;

    &-custom {
        background-color: $body-bg;

        &:hover {
            border: 1px solid $customPrimary;
        }
    }
}

.card-body {
    padding: 24px 16px;
}

.img-fluid {
    max-width: 100%;
    height: auto;
}

.btn {
    margin-top: 16px;
}
</style>
