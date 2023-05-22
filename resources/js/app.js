import { createApp } from 'vue';
import LoginPageForm from '../../vue/src/components/LoginFormPage.vue';

const app = createApp({});
app.component('login-page-form', LoginPageForm);
app.mount('#app');
