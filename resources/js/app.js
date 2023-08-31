
import './bootstrap';
import { createApp } from 'vue';
// import vueRouter from 'vue-router'; se puese asi o como abajo
import { createRouter, createWebHashHistory } from 'vue-router';

import Component from './components/Component.vue';
import Example from './components/Example.vue';
// import Pokemon from './view/pokemon.vue'

const routes = [
    { path: '/component', component: Component },
    { path: '/', component: Example },
    {
        path: '/pokemon',
        // component: Pokemon
        component: () => import('@/view/pokemon.vue'),
        name: 'pokemon',
    },
];

const router = createRouter({
    history: createWebHashHistory(),
    routes,
});


const app = createApp({
    setup() {
        const selected = "Pokemon";
        return {
            selected,
        }
    },
    delimiters: ['[[', ']]'],
});

app.use(router);
app.mount('#app');

// window.app = createApp({
//     components: {
//         Component,
//         Example,
//         Pokemon,
//     },
//     setup() {
//         const selected = ref('Pokemon');
//         return {
//             selected,
//         };
//     },
// }).mount('#app');

