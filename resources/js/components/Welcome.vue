<script>
import UserRegistrationForm from "../pages/UserRegistrationForm.vue";
import Navigation from "./Navigation.vue";

export default {
    components: {Navigation, UserRegistrationForm},
    mounted() {
        // Для базовой кнопки можно не использовать дополнительную настройку
    }
};
</script>

<template>
    <div class="container">
        <UserRegistrationForm />
        <Navigation />
    </div>
</template>


<style scoped>
</style>
