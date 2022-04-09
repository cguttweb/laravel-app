require('./bootstrap');
import { createApp } from 'vue'

//importing your vue components
import Home from './components/Home.vue';

const app = createApp({})

// your vue components
app.component('Home', Home)

app.mount('#app')

console.log('loaded');
