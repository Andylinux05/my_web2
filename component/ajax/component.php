<?php
require("../config/cek_sesi.php");
require '../config/koneksi.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM component
   WHERE
   nama LIKE '%$keyword%' OR
   fungsi LIKE '%$keyword%' OR
   kategori LIKE '%$keyword%' OR
   harga LIKE '%$keyword%'";
$barang = query($query);
?>


<?php if (empty($barang)): ?>
    <center>
        <div class="empty"></div>
        <h4 style="font-size:20px">Data Tidak Ditemukan</h4>
    </center>
<?php endif; ?>

<?php $i = 1;
foreach ($barang as $row) { ?>
    <div class="card">
        <a href="./info_component.php?id=<?= $row['id'] ?>" class="card-notif">Silahkan click untuk info lebih lanjut..</a>
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
    <?php $i++; ?>
<?php } ?>