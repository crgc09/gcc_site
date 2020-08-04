window.Vue = require('vue');
import './bootstrap';
import Routes from './routes';
import vuetify from './vuetify'
import App from './components/App';

const app = new Vue({
  el: '#app',
  vuetify,
  router: Routes,
  render: h => h(App),
});