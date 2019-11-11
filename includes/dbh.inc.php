<?php

define('EMAIL','guptamanishkumar987@gmail.com');
define('PASSWORD','8652895413');

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "roomrent";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
else {
    mysqli_select_db($conn, $dBName);
}
?>
