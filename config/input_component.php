<?php
include('koneksi.php');
include('cek_sesi.php');

$lokasi_file = $_FILES['file_upload']['tmp_name'];
$nama_file = $_FILES['file_upload']['name'];

// cek inputan pada form bila tidak lengkap //
if (!empty($lokasi_file)) {
    move_uploaded_file($lokasi_file, "../gambar/$nama_file");
    $a = mysqli_query($konek, "INSERT INTO component (nama,          fungsi,         kategori,           harga,     gambar) 
                                                    VAlUES ('$_POST[nama]','$_POST[fungsi]','$_POST[kategori]','$_POST[harga]','$nama_file')");

    ?>
    <script>
        alert('Data berhasil di input');
        window.location = "./../component/form_component.php";
    </script>
    <?php
} else {
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../assets/css/ibarang.css">
        <script 
            src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs"
            type="module"></script>
    </head>

    <body>
        <center>
            
            <dotlottie-player 
            src="https://lottie.host/8951ce9c-c20a-4ea2-9320-27e5a685e5d5/P9bCmJn3mt.lottie"
            background="transparent" 
            speed="2" 
            style="width: 300px; height: 300px" 
            loop autoplay></dotlottie-player>
            <h1 aling="center">Maaf, Data yang anda masukkan tidak lengkap, Silakan kembali</h1>
            <table>
                <form method=POST action=./../component/form_component.php>
                    <button>Kembali</button>
                </form>
                <form method=POST action=./logout.php>
                    <button>logOut</button>
                </form>
            </table>
        </center>

    </body>

    </html>
<?php } ?>