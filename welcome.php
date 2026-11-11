<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}
include "header.inc";
?>
  <main>
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION["user"]); ?>!</h2>
    <p>Your token: <?php echo htmlspecialchars($_SESSION["token"]); ?></p>
    <p>You have successfully logged in.</p>
  </main>
<?php include "footer.inc"; ?>