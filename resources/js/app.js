require('./bootstrap');

import Index from './Index.vue';
import createRouter from './router';
import { createStore } from 'vuex';
import storeDefinition from "./store";
import ValidationErrors from "./shared/components/ValidationErrors";

const { createApp } = require('vue');
const store = createStore(storeDefinition)

createApp({
        extends: Index,
        created() {
            this.$store.dispatch('loadStoredState')
            this.$store.dispatch('loadUser')
        },
    })
    .use(createRouter())
    .use(store)
    .component('ValidationErrors', ValidationErrors)
    .mount('#app')



