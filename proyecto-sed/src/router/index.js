import { createRouter, createWebHistory } from 'vue-router';
import Register from '../components/Register.vue';
import HomeView from '../views/HomeView.vue';
import Login from '../components/Login.vue';
import MarcacionView from '../views/MarcacionView.vue';

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [
        {
            path: '/',
            name: 'Home',
            component: HomeView
        },
        {
            path: '/register',
            name: 'Register',
            component: Register
        },
        {
            path: '/login',
            name: 'Login',
            component: Login
        },
        {
            path: '/marcacion',
            name: 'Marcacion',
            component: MarcacionView,
        }
    ]
});

export default router;

