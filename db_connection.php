<?php 

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "exvoid_web";

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$conn) {
    exit("Failed to connect to the database" . mysqli_connect_error());
}

?>