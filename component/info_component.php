<?php
include('../config/cek_sesi.php');
include('../config/koneksi.php');

// $id= isset($_GET['id']) ? intval($_GET['id']) : 0;

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
} else {
    $id = 0;
}

$query = "SELECT * FROM component WHERE id= $id";
$result = mysqli_query($konek, $query);
$row = mysqli_fetch_assoc($result);


if (!$row) {
    die('data tidak di temukan');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Elektronik</title>
    <link rel="stylesheet" href="..\assets\css\info_component.css">
</head>

<body>
    <div class="header">
        <h1><?= htmlspecialchars($row['nama']) ?></h1>
        <button><a href="./tampil_component.php">Kembali</a></button>
        <button><a href="./menu.php">Menu Utama</a></button>
        <button><a href="../config/logout.php">logOut</a></button>
    </div>
    <div class="container">
        <div class="item">
            <h1><?= htmlspecialchars($row['nama']); ?></h1>
            <img src="../gambar/<?= htmlspecialchars($row['gambar']) ?>" alt=gambar/<?= $row['gambar'] ?>">
        </div>
        <div class="item-info">
            <div class="info">
                <p>Type <?= htmlspecialchars($row['kategori']); ?></p><br>
                <p><?= htmlspecialchars($row['fungsi']); ?></p><br>
                <p>Harga Peritem Rp.<?= htmlspecialchars($row['harga']); ?></p>
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