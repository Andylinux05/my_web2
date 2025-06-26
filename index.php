<?php include('./config/cek_use_pass.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
  <link rel="stylesheet" href="./assets/css/index.css">
</head>

<body>

  <div class="informasi">
    <div class="info">
      <div class="tutup">X</div>
      <center>
        <h3>Hai 👋</h3><br>
        <p>Jika anda ingin Login sebagai <b>admin</b></p>
        <p>Username : admin</p>
        <p>Password : admin123</p><br>
        <p>Jika anda ingin Login sebagai <b>User Biasa</b></p>
        <p>Username : sam/ danu/ riski</p>
        <p>Password : sam123/ danu123/ riski123</p><br>
        <p>Pada login <b>User Biasa</b> ada beberapa fitur yang tidak tersedia cth: Tambah Component</p>
      </center>
    </div>
  </div>

  <div class="container">
    <div class="buka">?</div>
    <h1 class="title">Selamat Datang di Website Kami</h1>
    <div class="con">
      <div class="animasi">
        <dotlottie-player src="https://lottie.host/0f836a6b-62b3-4785-a789-20b985f0ae40/mRiEC8utwk.lottie"
          background="transparent" speed="1" style="width: 400px; height: 400px" loop autoplay></dotlottie-player>
      </div>

      <div class="form">

        <div class="card">
          <h2>Login</h2>
          <form action="./config/login_proses.php" method="POST">

            <div class="user">
              <img src="./assets/img/Profile.png" alt="user">
              <input type="text" name="username" placeholder="Masukkan username = admin" required>
            </div>

            <div class="pass">
              <img src="assets/img/password.png" alt="pass">
              <input type="password" name="password" placeholder="Masukkan password = admin123" required>
            </div>

            <button type="submit" class="btn">Login</button>
          </form>
        </div>


        <div class="footer">
          &copy; <?= date("Y") ?> Dibuat oleh 
          A.SAMMENGLANGI NIM : 1123100273, 
          LAKSA PUTRA DANOLAK Nim : 1124100448, 
          RIFKI APRIYANTO UTOMO Nim : 1123100175
        </div>
      </div>
    </div>
  </div>
  <script src="./assets/js/index.js"></script>
</body>

</html>