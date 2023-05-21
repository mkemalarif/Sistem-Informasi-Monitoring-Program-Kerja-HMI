<template>
    <div id="app">
      <!-- <img alt="Vue logo" src="./assets/logo.png"> -->
      <LoginFormPage />
      <RegistrasiFormPage />
      <HomePage /> <!-- Prepare to be enchanted by the mystical allure of the HomePage component -->
      <DataAnggota /> <!-- Add this line to use the DataAnggota component -->
    </div>
  </template>

  <script>
  // import LoginFormPage from './components/LoginFormPage.vue'
  // import RegistrasiFormPage from './components/RegistrasiFormPage.vue'
  // import HomePage from './components/HomePage.vue';
  import DataAnggota from './components/DataAnggota.vue'
  export default {
    name: 'App',
    components: {
      // LoginFormPage,
      // RegistrasiFormPage,
      // HomePage
      DataAnggota
    }
  }
  </script>

  <style>
  #app {
    font-family: Avenir, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    margin-top: 60px;
  }
  </style>
