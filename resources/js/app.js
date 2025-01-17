import '../sass/app.scss';

import { createApp } from 'vue';

import Greeting from './components/Welcome.vue';

import '@material/web/button/filled-button.js';
import '@material/web/button/outlined-button.js';
import '@material/web/textfield/filled-text-field.js';
import '@material/web/textfield/outlined-text-field.js';
import '@material/web/fab/branded-fab.js';
import '@material/web/icon/icon.js';

const app = createApp(Greeting);
app.mount('#app');
