import Dashboard from './components/pages/Dashboard.vue';
import Cliente from './components/pages/cliente/Cliente';
import Usuario from './components/pages/Usuarios/Usuario';
import Edad from './components/pages/Edad/Edad';
import Calendario from './components/pages/Calendario/Calendario';
import ListaCliente from './components/pages/cliente/Listar';
import ListarUsuario from './components/pages/Usuarios/Listar';
import ListarEdad from './components/pages/Edad/Listar';

import CrearCliente from './components/pages/cliente/Crear';
import CrearUsuario from './components/pages/Usuarios/Crear';
import CrearEdad from './components/pages/Edad/Crear';

export default [
    {
        path : '/',
        name : 'Dashboard',
        component: Dashboard
    },
    {
        path : '/cliente',
        component : Cliente,
        children: [{
            path: '/',
            component: ListaCliente
        },
        {
            path: 'crear',
            component: CrearCliente
        }]
        }
        ,{
        path : '/Calendario',
        component : Calendario,
        children: [{
            path: '/',
            component: Calendario
        }]
        }
        ,{
            path : '/Usuarios',
            component : Usuario,
            children: [{
                path: '/',
                component: ListarUsuario
            },
            {
                path: 'crear',
                component: CrearUsuario
            }]
            },
            {
                path : '/Edad',
                component : Edad,
                children: [{
                    path: '/',
                    component: ListarEdad
                },
                {
                    path: 'crear',
                    component: CrearEdad
                }]
                }
];