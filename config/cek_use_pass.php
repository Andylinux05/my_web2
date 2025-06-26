<?php 
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "gagal") {
?>
        <script>
            alert("Silakan Masukkan username dan password dengan benar");
            window.location.href = "../index.php"; 
        </script>
<?php
        }
    }
?>