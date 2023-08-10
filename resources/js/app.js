import './bootstrap';
import { createApp,ref } from 'vue';

import Component from './components/Component.vue';
import Example from './components/Example.vue';
import Pokemon from './view/pokemon.vue'

window.app = createApp({
    components: {
        Component,
        Example,
        Pokemon,
    },
    setup() {
        const selected = ref('Pokemon');
        return {
            selected,
        };
    },
}).mount('#app');

