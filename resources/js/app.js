require('./bootstrap');
import { createApp } from 'vue'

import Home from './components/Home.vue';

createApp({
    components: {
        Home
    }
}).mount('#app')
