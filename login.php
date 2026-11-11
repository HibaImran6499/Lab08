<?php include "header.inc"; ?>
  <main>
    <h2>Login</h2>
    <?php
      if (isset($_GET["error"])) {
          echo "<p>Invalid username or password. Please try again.</p>";
      }
    ?>
    <form method="post" action="process.php">
      <input type="hidden" name="token" value="H106246499">
      <p>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </p>
      <p>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </p>
      <p><input type="submit" value="Login"></p>
    </form>
  </main>
<?php include "footer.inc"; ?>