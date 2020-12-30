<?php
$conn = new mysqli("localhost", "root", "");

// check connection
if($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
}

//check if database is created successfully
$sequel = "CREATE DATABASE IF NOT EXISTS l5dw";

if($conn->query($sequel)===TRUE){
    echo "<p>Database created successfully</p>";
}
else{
    die("<p>Error creating database: </p>".$conn->error);
}

// i select the database
$conn = new mysqli("localhost", "root", "", "l5dw");
// check if db is selected
if($conn->connect_error){
    die("<p>Could not select database: </p>".$conn->connect_error);
}else{
    echo "<p>Database 'l5dw' successfully selected</p>"; //TODO; It would be wise to refactor the code such that the name of the database can be dynamically retrieved, so as to make the code portable
}

// create accounts table
$sql =
"CREATE TABLE IF NOT EXISTS accounts(
    id int(11) NOT NULL AUTO_INCREMENT,
    username varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL, -- TODO: Note that in the clients table, the pets are allowed from an enum. we must ensure consistency with types and breeds 
    PRIMARY KEY(id))
    ENGINE=InnoDB DEFAULT CHARSET=latin1";
    //check if table is created
    if($conn->query($sql)===TRUE){
        echo "<p>Accounts table successfully created";
    }else{
        die("<p>Could not create table accounts:</p>".$conn->error);
    }
    

// echo "<p><a href='login.php'>Proceed to login</a></p>";
// echo "<p><a href='register.php'>Proceed to create account</a></p>";

//close connection
$conn->close();
?>