<?php
include "configure.php";

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$paddr = $_POST['paddr'];
$pcode = $_POST['pcode'];

$query = $connection -> prepare("INSERT INTO users(first_name, last_name, email, date_of_birth, postal_address, postcode) VALUES(?,?,?,?,?,?)");

$query -> bind_param("ssssss", $fname, $lname, $email, $dob, $paddr, $pcode);

$query -> execute();

// $id = 0; defining the global id variable which is needed in registeraccount.php
$get_id = $connection -> prepare("SELECT userid FROM users WHERE email=?");
$get_id -> bind_param("s", $email);
$get_id -> execute();
$get_id -> bind_result($id);
$get_id -> fetch();

header("location:addaccount.html");

?>