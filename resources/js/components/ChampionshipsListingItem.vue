<template>
    <div class="card mb-3 card-custom">
        <div class="row g-0">
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title">{{ title }}</h3>
                    <p class="card-text">
                        <strong>Дата начала:</strong> {{ startDate }}<br />
                        <strong>{{ carType }}</strong><br />
                        {{ description }}
                    </p>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-center">
                <img :src="logo" class="img-fluid rounded" alt="Логотип чемпионата" />
            </div>
        </div>
    </div>
</template>

<script setup>
import { defineProps } from "vue";

const props = defineProps({
    title: { type: String, required: true },
    startDate: { type: String, required: true },
    carType: { carType: String, required: true },
    description: { type: String, required: true },
    logo: { type: String, required: true },
});
</script>

<style scoped lang="scss">
@use '../../sass/app.scss' as *;
.card {
    border: 1px solid #ddd;
    border-radius: 8px;

    &-custom {
        background-color: $body-bg;

        &:hover {
            border: 1px solid $primary;
        }
    }
}

.card-body {
    padding: 16px;
}

.img-fluid {
    max-width: 100%;
    height: auto;
}
</style>
