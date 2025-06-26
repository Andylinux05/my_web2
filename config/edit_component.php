<?php
include('./cek_sesi.php');
include("./koneksi.php");

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
} else {
    $id = 0;
}

$query = "SELECT * FROM component WHERE id= $id";
$result = mysqli_query($konek, $query);
$row = mysqli_fetch_assoc($result);


?>
<html>

<head>
    <title>BUKU</title>
    <link rel="stylesheet" href="../assets/css/edit_component.css">
</head>

<body>
    <div>
        <h1>EDIT COMPONENT</h1>
        <div class="edit">
            <form method="POST" enctype="multipart/form-data" name="update" action="update_component.php">
                <input type="hidden" name="id" value="<?= htmlspecialchars($row['id']) ?>">
                <div>
                    <label for="nama"> Nama : </label>
                    <input id="nama" type=text name=nama value=<?= $row['nama'] ?>>
                </div>

                <div>
                    <label for="">Fungsi :</label>
                    <input type="text" name="fungsi" value="<?= htmlspecialchars($row['fungsi']) ?>" size="100">
                </div>

                <div>
                    <label for="kategori">kategori</label>
                    <select id="kategori" name=kategori>
                        <option value=0 selected>- Pilih Kategori -</option>
                        <?php
                        include "./config/koneksi.php";
                        $tampil = mysqli_query($konek, "SELECT * FROM kategori ORDER BY nm_kategori");
                        while ($r = mysqli_fetch_array($tampil)) {
                            ?>
                            <option value=<?= $r["nm_kategori"] ?>> <?= $r["nm_kategori"] ?> </option>
                        <?php } ?>
                    </select>
                </div>

                <div>
                    <label for="harga"> Harga </label>
                    <input id="harga" type="number" name="harga" value="<?= htmlspecialchars($row['harga']) ?>">
                </div>

                <div>
                    <label for="gambar"> Gambar :</label>
                    <img id="gambar" src="./../gambar/<?= htmlspecialchars($row['gambar']) ?>"
                        alt="<?= htmlspecialchars($row['gambar']) ?>">
                    <input type="file" name="file_upload">
                </div>
                <input type="submit" value="Update">
            </form>

            <form action="../component/tampil_component.php">
                <button>Tampil component</button>
            </form>
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