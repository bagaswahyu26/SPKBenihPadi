<?php 

$baseUrl = 'http://localhost/TPE/';
$koneksi = mysqli_connect("localhost","root","","dbspk");
if (!$koneksi) {
    echo "Failed to connect to MySQL". mysqli_connect_errno();
    exit();
}

?>