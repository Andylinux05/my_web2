<?php
include './cek_sesi.php';
require './koneksi.php';


if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    if(hapus($id) > 0) { 
    ?>
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = './../component/tampil_component.php';
        </script>
    <?php 
    } else { 
    ?>
        <script>
            alert('Data gagal dihapus!');
            document.location.href = './../component/tampil_component.php';
        </script>
    <?php 
    }
} else {
    // Jika tidak ada parameter id
    ?>
    <script>
        alert('ID tidak valid!');
        document.location.href = './../component/tampil_component.php';
    </script>
    <?php
}
?>