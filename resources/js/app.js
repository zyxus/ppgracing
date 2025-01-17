import '../css/app.scss';

import { createApp } from 'vue';
import Greeting from './components/Welcome.vue';
import '@material/web/button/filled-button.js';
import '@material/web/button/outlined-button.js';

const app = createApp(Greeting);
app.mount('#app');
