<?php
$user_name = "root";
$password = "";
$database = "l5dw";
$server = "127.0.0.1";

$connection = new mysqli($server, $user_name, $password, $database);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: ".mysqli_connect_error();
}   

// print "Connection to the server opened";

?>