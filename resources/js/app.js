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

document.addEventListener('focusout', function () {
    window.scrollTo(0, 0);
});

document.addEventListener('click', function (event) {
    if (!event.target.closest('input, textarea')) {
        document.activeElement.blur();
    }
});

function isTelegramDesktop() {
    return navigator.userAgent.includes("TelegramDesktop");
}

if (isTelegramDesktop()) {
    document.body.style.transform = "scale(0.9)"; // Уменьшаем масштаб
    document.body.style.transformOrigin = "top center"; // Фиксируем центрирование
}
