import AllPaciente from './components/AllPaciente.vue';
import CreatePaciente from './components/CreatePaciente.vue';
import EditPaciente from './components/EditPaciente.vue';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllPaciente
    },
    {
        name: 'create',
        path: '/create',
        component: CreatePaciente
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditPaciente
    }
];
