<template>
  <div id="app">
    <div class="login-container">
      <h1 class="title">Login Form</h1>
      <form>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" class="input-field">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" class="input-field">
        </div>
        <button type="submit" class="login-button">Login</button>
      </form>
    </div>
  </div>
</template>

<script>
// Import the CSS file
import "../assets/css/main.css";

export default {
  // Component options...
}
</script>

<style scoped lang="css">
/* Your inline CSS styles here */
</style>
