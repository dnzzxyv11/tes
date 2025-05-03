<!DOCTYPE html>
<html>
<head>
  <title>Daftar Akun</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <div class="container">
    <h2>Registrasi</h2>
    <form method="POST" action="register_process.php">
      <input type="text" name="username" placeholder="Username" required><br>
      <input type="password" name="password" placeholder="Password" required><br>
      <button type="submit">Daftar</button>
    </form>
    <p>Sudah punya akun? <a href="index.php">Login</a></p>
  </div>
</body>
</html>