import '@fortawesome/fontawesome-free/css/all.min.css';
import '../sass/app.scss';

import { createApp } from 'vue';
import router from "../../router/index.js";
import Greeting from './components/Welcome.vue';
import Championships from "./components/Championships.vue";

// import 'bootstrap/dist/css/bootstrap.min.css';
// import 'bootstrap';

const app = createApp(Greeting);
app.use(router);
app.mount('#app');

// чтобы клавиатура скрывалась на телефоне при клике в пустое место или потере фокуса на инпуте
document.addEventListener('touchstart', function(event) {
    const activeElement = document.activeElement;

    // Проверяем, не является ли текущий элемент <select>
    if (activeElement && activeElement.tagName !== "SELECT") {
        activeElement.blur();
    }
});

document.addEventListener("DOMContentLoaded", function() {
    window.onload = function () {
        document.body.classList.add("loaded"); // Убирает прелоадер после загрузки
    };
});
