<?php
//sdi pse e kom bo
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbname = "users";
$conn = mysqli_connect($hostName,$dbUser,$dbPassword, $dbname);

if (!conn) {
    die("something went wrong")
}
?>