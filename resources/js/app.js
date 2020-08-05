import './bootstrap';
import Vue from 'vue';
import Routes from './routes';
import vuetify from './vuetify'
import App from './components/App';

const app = new Vue({
  el: '#app',
  vuetify,
  router: Routes,
  render: h => h(App),
});

export default app;