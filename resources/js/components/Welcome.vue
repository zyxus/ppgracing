
<script>
import AppButton from "./AppButton.vue";
import TextInput from "./TextInput.vue";
import UserRegistrationForm from "./UserRegistrationForm.vue";

export default {
    components: {UserRegistrationForm, TextInput, AppButton},
    mounted() {
        // Для базовой кнопки можно не использовать дополнительную настройку
    }
};
</script>

<template>
    <div class="container">
        <UserRegistrationForm />
    </div>
</template>


<style scoped>
</style>
