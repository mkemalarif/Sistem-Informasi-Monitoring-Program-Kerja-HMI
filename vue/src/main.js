import { createApp } from 'vue';
import App from './App.vue';
import router from './router';
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap';
import LoginPageForm from '../src/components/LoginFormPage.vue';
// import DataAnggota from '../src/components/DataAnggota.vue';

const app = createApp(App);
app.use(router);
app.component('LoginPageForm', LoginPageForm);
app.mount('#app');
