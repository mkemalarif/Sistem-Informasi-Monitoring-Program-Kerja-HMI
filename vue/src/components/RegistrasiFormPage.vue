<template>
    <div id="app">
      <div class="registration-container">
        <h1 class="title">Registration Form</h1>
        <form>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="input-field">
          </div>
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" class="input-field">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="input-field">
          </div>
          <div class="form-group">
            <label for="account-type">Account Type</label>
            <select id="account-type" name="account-type" class="input-field">
              <option value="admin">Admin</option>
              <option value="ketua">Ketua</option>
              <option value="anggota">Anggota</option>
            </select>
          </div>
          <button type="submit" class="register-button">Register</button>
        </form>
      </div>
    </div>
  </template>
  
  <script>
  // Import the CSS file
  import "../assets/css/regis.css";
  
  export default {
    // Component options...
  }
  </script>
  
  <style scoped lang="css">
  /* Your inline CSS styles here */
  </style>
  