<?php
include('./cek_sesi.php');
include "./koneksi.php";

// Validasi dan sanitasi input
$id = intval($_POST['id']);
$component = mysqli_real_escape_string($konek, $_POST['nama']);
$fungsi = mysqli_real_escape_string($konek, $_POST['fungsi']);
$kategori = mysqli_real_escape_string($konek, $_POST['kategori']);
$harga = intval($_POST['harga']);

// Apabila Gambar Tidak Diganti
if (empty($_FILES['file_upload']['tmp_name'])) {
    $query = "UPDATE component SET 
              nama = '$component',
              fungsi = '$fungsi',
              kategori = '$kategori',
              harga = $harga
              WHERE id = $id";
} 
// Apabila Gambar Diganti
else {
    $lokasi_file = $_FILES['file_upload']['tmp_name'];
    $nama_file = mysqli_real_escape_string($konek, $_FILES['file_upload']['name']);
    
    // Pindahkan file upload
    $upload_dir = "../gambar/";
    $target_file = $upload_dir . basename($nama_file);
    
    if(move_uploaded_file($lokasi_file, $target_file)) {
        $query = "UPDATE component SET 
                  nama = '$component',
                  fungsi = '$fungsi',
                  kategori = '$kategori',
                  harga = $harga,
                  gambar = '$nama_file'
                  WHERE id = $id";
    } else {
        die("Gagal upload file");
    }
}

if(mysqli_query($konek, $query)) {
    header('location:../component/tampil_component.php');
} else {
    die("Error: " . mysqli_error($konek));
}

mysqli_close($konek);
?>