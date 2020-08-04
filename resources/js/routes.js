import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from './views/Home';
import About from './views/About';
import Educacion from './views/Educacion';
import Portafolio from './views/Portafolio';
import Curriculum from './views/Curriculum';
import Contacto from './views/Contacto';

Vue.use(VueRouter);

const router = new VueRouter({
  mode: 'history',
  routes: [
    { 
      path: '/gcc_site',
      name: '/',
      component: Home
    },
    { 
      path: '/gcc_site/home',
      name: 'home',
      component: Home
    },
    { 
      path: '/gcc_site/acerca_de',
      name: 'acerca_de',
      component: About
    },
    { 
      path: '/gcc_site/educacion',
      name: 'educacion',
      component: Educacion
    },
    { 
      path: '/gcc_site/portafolio',
      name: 'portafolio',
      component: Portafolio
    },
    { 
      path: '/gcc_site/curriculum',
      name: 'curriculum',
      component: Curriculum
    },
    { 
      path: '/gcc_site/contacto',
      name: 'contacto',
      component: Contacto
    },
  ]
});

export default router;