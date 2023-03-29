import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler.js';

import Editor from './components/Editor.vue'

const app = createApp({})

app.component('Editor', Editor)

app.mount('#app')