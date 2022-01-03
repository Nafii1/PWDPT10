<?php
$host = "localhost";
$username = "id18217253_mahasiswa";
$password = "T2aq8MdGDI9sht{D";
$databasename = "id18217253_akademik";
$con = @mysqli_connect($host, $username, $password, $databasename);
if (!$con) {
    echo "Error: " . mysqli_connect_error();
    exit();
}
