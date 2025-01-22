import '../sass/app.scss';

import { createApp } from 'vue';
import router from "../../router/index.js";
import Greeting from './components/Welcome.vue';
import Championships from "./components/Championships.vue";

import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap';

const app = createApp(Greeting);
app.use(router);
app.mount('#app');
