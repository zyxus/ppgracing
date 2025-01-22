import '@fortawesome/fontawesome-free/css/all.min.css';
import '../sass/app.scss';

// import { createApp } from 'vue';
// import router from "../../router/index.js";
// import Greeting from './components/Welcome.vue';
import Championships from "./pages/Championships.vue";

// import 'bootstrap/dist/css/bootstrap.min.css';
// import 'bootstrap';

// const app = createApp(Greeting);
// app.use(router);
// app.mount('#app');



import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';

createInertiaApp({
    resolve: name => resolvePageComponent(
        `./pages/${name}.vue`,
        import.meta.glob('./pages/**/*.vue')
    ),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el);
    },
});

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
