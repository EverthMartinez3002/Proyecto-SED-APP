import { createRouter, createWebHistory } from 'vue-router';
import Register from '../components/Register.vue';
import HomeView from '../views/HomeView.vue';

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
    ]
});

export default router;

