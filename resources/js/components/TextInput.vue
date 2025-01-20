<script setup>
import { defineProps } from 'vue';

const props = defineProps({
    label: {
        type: String,
        required: true
    },
    required: {
        type: Boolean,
        default: true
    }
});
</script>

<template>
    <md-filled-text-field
        :label="label"
        :required="required"
    ></md-filled-text-field>
</template>

<style scoped>
* {
    --_container-color: #fff;
}
md-filled-text-field {
    margin: 0 0 16px 0;
}
</style>
