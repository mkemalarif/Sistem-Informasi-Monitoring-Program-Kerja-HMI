import { createRouter, createWebHistory } from "vue-router";
import LoginFormPage from "./components/LoginFormPage.vue";
// import RegistrasiFormPage from './components/RegistrasiFormPage.vue'

const routes = [
  { path: "/", component: LoginFormPage },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
