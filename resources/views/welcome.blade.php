<!DOCTYPE html>
<html>
<head>
    <!-- Head section -->
</head>
<body>
    <!-- Tempatkan elemen dengan id "app" di sini -->
    <div id="app"></div>

    <!-- Body section -->

    <!-- Tempatkan tag komponen Vue di sini -->
    <login-page-form></login-page-form>

    <!-- Script section -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        // Inisialisasi aplikasi Vue
        const app = Vue.createApp({});
        app.component('login-page-form', LoginPageForm);
        app.mount('#app');
    </script>
</body>
</html>
