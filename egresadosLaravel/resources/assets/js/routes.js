import Home from './../components/Home.vue';
import Example from './../components/Example.vue';
export const routes = [
    { path: '/chat', component: Home, name: 'Home' },
    { path: '/chat/example', component: Example, name: 'Example' }
];