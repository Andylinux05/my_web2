<?php include('./../config/cek_sesi.php') ?>
<html>

<head>
    <title>BARANG</title>
    <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
    <link rel="stylesheet" href=".\..\assets\css\form_component.css">
</head>
<body
    <center>
        <h2 align="center">INPUT DATA BARANG</h2>
        <dotlottie-player src="https://lottie.host/3d199385-46bf-4fda-93e4-5cd0c4852484/ov5AqmcWZp.lottie" background="transparent" speed="4" style="width: 200px; height: 180px" loop autoplay></dotlottie-player>
        <div class="glass">
            <form method=POST action=./../config/input_component.php enctype='multipart/form-data'>
                <table>
                    <tr>
                        <td valign=top >Nama Component</td>
                        <td> : <input type=text name=nama size=30></td>
                    </tr>
                    <tr>
                        <td> fungsi </td>
                        <td> : <input type=text name=fungsi></td>
                    </tr>
                    <tr>
                        <td> Kategori </td>
                        <td> :
                            <select name=kategori>
                                <option value=0 selected>- Pilih Kategori -</option>
                                <?php
                                include "./../config/koneksi.php";
                                $tampil = mysqli_query($konek, "SELECT * FROM kategori ORDER BY nm_kategori");
                                while ($r = mysqli_fetch_array($tampil)) {
                                ?>
                                    <option value=<?= $r["nm_kategori"] ?>> <?= $r["nm_kategori"] ?> </option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td> Harga </td>
                        <td> : <input type="number" name=harga></td>
                    </tr>
                    <tr>
                        <td>Gambar</td>
                        <td> : <input type="file" name="file_upload"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right"> <input id=simpan type=submit name=submit value=Simpan> </td>
                    </tr>
                </table>
            </form>
            <br>
            <form action="./tampil_component.php" method="post">
                <button>Tampil Component</button>
            </form>
            <form method=POST action=./menu.php>
                <button>Menu Utama</button>
            </form>
            <br>
        </div>
    </center>
    <div class="footer">
        &copy; <?= date("Y") ?> Dibuat oleh
        A.SAMMENGLANGI NIM : 1123100273,
        LAKSA PUTRA DANOLAK Nim : 1124100448,
        RIFKI APRIYANTO UTOMO Nim : 1123100175
    </div>
</body>

</html>