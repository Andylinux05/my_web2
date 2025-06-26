<?php 
    // session_start();
    //     if(empty($_SESSION['username'])){
    //         header("location:index.php");
    //         exit();
    //     }


// === FUNGSI SAMA === //
    session_start();
    // Jika user belum login, redirect ke index
    if (!isset($_SESSION['username'])) {
        header("Location: ../index.php");
        exit();
    }

?>