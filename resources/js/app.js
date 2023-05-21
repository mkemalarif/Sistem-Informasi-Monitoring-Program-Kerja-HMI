import { createApp } from 'vue';
import LoginPageForm from './components/LoginPageForm.vue';

const app = createApp({});
app.component('login-page-form', LoginPageForm);
app.mount('#app');
