<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: index.php");
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Chat ke Telegram</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Halo, <?= $_SESSION['username'] ?></h2>
    <form method="POST" action="send_message.php">
      <textarea name="message" placeholder="Tulis pesan ke admin..." required></textarea><br>
      <button type="submit">Kirim</button>
    </form>
    <p><a href="logout.php">Logout</a></p>
  </div>
</body>
</html>