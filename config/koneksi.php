<?php
$server = 'db';           // Nama service di docker-compose
$username = 'myuser';       // Sesuai MYSQL_USER
$password = 'mypassword';   // Sesuai MYSQL_PASSWORD
$database = 'mydb'; // Sesuai MYSQL_DATABASE

// $host = 'db';        // Nama service di docker-compose
// $user = 'myuser';    // atau 'root'
// $pass = 'mypassword'; // atau 'rootpassword' untuk root
// $db   = 'mydb';

// $conn = new mysqli($host, $user, $pass, $db);

   $konek = mysqli_connect($server, $username, $password, $database, 3306);

    function query($sql){
        global $konek;
        $result = mysqli_query($konek, $sql);

        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

 function hapus($id) {
        global $konek;
        $id = intval($id);

        $query = mysqli_query($konek, "DELETE FROM component WHERE id = $id");
        
        return mysqli_affected_rows($konek);
}

    function cari($keyword){
        $query = "SELECT * FROM component WHERE 
        nama LIKE '%$keyword%' OR 
        fungsi LIKE '%$keyword%' OR
        kategori LIKE '%$keyword%' OR
        harga LIKE '%$keyword%' ";
        return query($query);
    }
?>