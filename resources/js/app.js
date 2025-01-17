import '../css/app.scss';

import { createApp } from 'vue';
import Greeting from './components/Welcome.vue';

const app = createApp(Greeting);
app.mount('#app');
