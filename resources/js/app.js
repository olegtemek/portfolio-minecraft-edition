import './bootstrap';

import App from '@/views/App.vue';
import router from '@/router/router.js';
import store from '@/store/store.js'
import { createApp } from 'vue';
import ui from '@/views/components/UI/index.js'

const app = createApp(App);

ui.forEach(component => {
  app.component(component.name, component)
});

app
  .use(router)
  .use(store)
  .mount('#app')