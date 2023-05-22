import './bootstrap';


import {createApp} from 'vue';
import LoginPageForm from '../../vue/src/components/LoginPageForm';

const app = createApp({});
app.component('login-page-form', LoginPageForm);
app.mount('#app');
