<?php
include './../config/cek_sesi.php';
include './../config/koneksi.php';


$query = "SELECT * FROM `kategori`";
$result = mysqli_query($konek, $query);
?>


<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Menu Utama</title>
  <link rel="stylesheet" href="./../assets/css/menu.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
</head>

<body>

  <div class="container">

    <div class="info">
      <div class="animasi">
        <dotlottie-player src="https://lottie.host/b4d7c415-2d1b-4737-bafd-38786cd33d92/1m0NYfSrat.lottie"
          background="transparent" speed="1.02" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
      </div>
      <h1 class="sapa">Hai : <strong><?= htmlspecialchars($_SESSION['username']) ?></strong></h1>

      <div class="text">
        <h1 class="">Apa sih itu component PASIF & AKTIF </h1><br>
        <?php
        $i = 1;
        while ($row = mysqli_fetch_assoc($result)) { ?>
          <p><?= "<b>" . $i . "</b>" . ". " . $row['keterangan']; ?></p><br>
          <?php
          $i++;
        } ?>
      </div>
    </div>


    <div class="box">
      <div class="btn-group">
        <a href="./tampil_component.php">
          <button class="btn b2">Tampil Komponen</button>
        </a>

        <a href="./../config/logout.php">
          <button class="btn b3">LogOut</button>
        </a>
      </div>
    </div>


  </div>
  <div class="footer">
    &copy; <?= date("Y") ?> Dibuat oleh
    A.SAMMENGLANGI NIM : 1123100273,
    LAKSA PUTRA DANOLAK Nim : 1124100448,
    RIFKI APRIYANTO UTOMO Nim : 1123100175
  </div>

</body>

</html>