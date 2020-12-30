<?php
require "configure.php";

$sql = "CREATE TABLE IF NOT EXISTS accounts(
    id int(11) not null,
    username varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    PRIMARY KEY(id))
    ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1";

$connection->query($sql);

$uname = $_POST['uname'];
$pw = $_POST['pwd'];
$cpw = $_POST['cpwd'];

$hash_pw = password_hash($cpw, PASSWORD_DEFAULT);

if($pw==$cpw){

    $sql_stmt = $connection -> prepare("SELECT id FROM accounts WHERE username=?");

    $sql_stmt -> bind_param("s", $uname);

    if($sql_stmt -> execute()){
        $sql_stmt -> store_result();
        if($sql_stmt->num_rows > 0){
            echo "This username is already taken";
            sleep(5);
            header("location:registeraccount.html");
        }else{
            $sql = $connection -> prepare("INSERT INTO accounts(username, `password`) VALUES(?,?)");
        
            $sql -> bind_param("ss", $uname, $hash_pw);
        
            $sql -> execute();

        }
    }else{
        echo "Oops! Something went wrong; please try again later.";
        sleep(5);
        header("location:index.html");
    }
}
else{
    echo "Your passwords are not equal.";
    sleep(5);
    header("location:registeraccount.html");
}

?>