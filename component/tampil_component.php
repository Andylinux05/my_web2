<?php
include('./../config/cek_sesi.php');
include './../config/koneksi.php';

$query = "SELECT * FROM component";
$result = mysqli_query($konek, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Component</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=".\..\assets\css\tampil_component.css">
</head>

<body>
    <div class="header">
        <a class="a" href="./menu.php">
            <h2 class="heading">DAFTAR COMPONENT</h2>
        </a>
        <input id="keyword" type="text" placeholder="Masukkan keyword pencarian...">
        <div class="actions">
            <?php if ($_SESSION['username'] == "admin") { ?>
                <form method="post" action="./form_component.php">
                    <button class="btn b1">Tambah Component</button>
                </form>
            <?php } ?>
            <form method="post" action="./menu.php">
                <button class="btn b2">Menu Utama</button>
            </form>
            <form method="post" action="./../config/logout.php">
                <button class="btn b3">Logout</button>
            </form>
        </div>
    </div>

    <div id="container">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="card">
                <a href="./info_component.php?id=<?= $row['id'] ?>" class="card-notif">Silahkan click untuk info lebih
                    lanjut..</a>
                <a class="info" href="./info_component.php?id=<?= $row['id'] ?>">
                    <img class="gambar" src="../gambar/<?= $row['gambar'] ?>" alt="<?= $row['gambar'] ?>">
                    <div class="title">
                        <h3><?= $row['nama'] ?></h3>
                        <p>Kategori : <?= $row['kategori'] ?></p>
                    </div>
                </a>
                <?php if ($_SESSION['username'] == "admin") { ?>
                    <div class="btn-edit">
                        <a href="../config/edit_component.php?id=<?= $row['id'] ?>">
                            <button class="edit">Edit</button>
                        </a>
                        <a href="../config/hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin ingin menghapus?')">
                            <button class="hapus">Hapus</button>
                        </a>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>


    </div>
    <div class="footer">
        &copy; <?= date("Y") ?> Dibuat oleh
        A.SAMMENGLANGI NIM : 1123100273,
        LAKSA PUTRA DANOLAK Nim : 1124100448,
        RIFKI APRIYANTO UTOMO Nim : 1123100175
    </div>

    <script src="./../assets/js/cari.js"></script>
</body>

</html>