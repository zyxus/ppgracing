import '../sass/app.scss';

import { createApp } from 'vue';

import Greeting from './components/Welcome.vue';

import '@material/web/button/filled-button.js';
import '@material/web/button/outlined-button.js';
import '@material/web/textfield/filled-text-field.js';
import '@material/web/textfield/outlined-text-field.js';
import '@material/web/fab/branded-fab.js';
import '@material/web/icon/icon.js';
import {
    argbFromHex,
    themeFromSourceColor,
    applyTheme
} from "@material/material-color-utilities";
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap';

const app = createApp(Greeting);
app.mount('#app');

// Get the theme from a hex color
const theme = themeFromSourceColor(argbFromHex('#E88439'), [
    {
        name: "custom-1",
        value: argbFromHex("#E88439"),
        blend: true,
    },
]);

// Print out the theme as JSON
console.log(JSON.stringify(theme, null, 2));

// Check if the user has dark mode turned on
const systemDark = window.matchMedia("(prefers-color-scheme: dark)").matches;

// Apply the theme to the body by updating custom properties for material tokens
applyTheme(theme, {target: document.body, dark: systemDark});
