<script setup>
import { defineProps } from 'vue';

const props = defineProps({
    label: {
        type: String,
        required: true,
    },
    required: {
        type: Boolean,
        default: true,
    },
});
</script>

<template>
    <div class="mb-3">
        <label :for="label" class="form-label">{{ label }}</label>
        <input
            type="text"
            class="form-control"
            :id="label"
            :required="required"
        />
    </div>
</template>

<style scoped>
.mb-3 {
    margin-bottom: 16px;
}
</style>
