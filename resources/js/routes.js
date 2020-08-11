import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from './views/Home';
import Admin from './views/Admin';
import About from './views/About';
import Educacion from './views/Educacion';
import Portafolio from './views/Portafolio';
import Curriculum from './views/Curriculum';
import Contacto from './views/Contacto';
import AdminDemo from './views/AdminDemo';

Vue.use(VueRouter);

function requireAR (to, from, next) {
  let rol = JSON.parse(localStorage.getItem('ur'));
  switch( to.meta.permission ){
    case 'user':
      if(rol==2){
        next();
      }
      else{
        next({path: '/gcc_site/home'});
      }
    break;
    case 'admin':
      if(rol==1){
        next();
      }
      else{
        next({path: '/gcc_site/home'});
      }
    break;
    default:
      next({path: '/gcc_site/home'});
  }  
}

const router = new VueRouter({
  mode: 'history',
  routes: [
    //All
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
    { 
      path: '/gcc_site/admin_demo',
      name: 'admin_demo',
      component: AdminDemo
    },
    //ADMIN
    { 
      path: '/gcc_site/admin',
      name: 'admin',
      component: Admin,
      beforeEnter: requireAR,
      meta: {
        permission: 'admin'
      }
    },
  ]
});

export default router;