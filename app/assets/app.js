/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)

import './styles/app.css';
import './styles/main.css';

// start the Stimulus application
import './bootstrap';
import './custom.js';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'


window.Vue = require('vue');
import store from './store/index.js';
import { createApp } from 'vue'

import App from "./App.vue"; 
const app = createApp(App)
import axios from 'axios'
import VueAxios from 'vue-axios'
app.use(VueAxios, axios)
app.use(store);

app.mount('#app');
app.component('font-awesome-icon', FontAwesomeIcon)

