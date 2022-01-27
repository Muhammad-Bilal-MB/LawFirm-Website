<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Lawfirm";

$link = new mysqli($servername, $username, $password, $dbname);

if($link){
    echo "Database Connected";
}
else{
    echo "Connection Faild".mysqli_connect_error();
}

if (isset($_POST['btn_login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $db_username = "SELECT * FROM admins Where Email = '$email' and Password = '$password'";
    $data = $link->query($db_username);
    
    if($data-> num_rows > 0){
        session_start();
        $_SESSION["email"] = $email;
        header('Location: adminhome.php');
    } 
    else {
        echo "Ohoo! No records found";
    }
}

?>