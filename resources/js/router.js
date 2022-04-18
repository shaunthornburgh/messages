import { createRouter, createWebHistory } from 'vue-router';
import Messages from "./views/MessagesApp";
import LoginForm from "./components/LoginForm";
import RegistrationForm from "./components/RegistrationForm";

export default () => createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/auth/login',
            name: 'auth-login',
            component: LoginForm,
        },
        {
            path: '/auth/register',
            name: 'auth-register',
            component: RegistrationForm,
        },
        {
            path: '/messages',
            name: 'messages',
            component: Messages,
        },
        {
            path: '/',
            name: 'home',
            component: LoginForm,
        },
    ]
})
