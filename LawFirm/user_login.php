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

if (isset($_POST['loginbtn'])){
    $username = $_POST['uname'];
    $password = $_POST['psw'];
    
    $db_username = "SELECT * FROM Users Where Username = '$username' and Password = '$password'";
    $data = $link->query($db_username);
    
    if($data-> num_rows > 0){
        session_start();
        $_SESSION["uname"] = $username;
        header('Location: userdashboard.php');
    } 
    else {
        echo "Ohoo! No records found";
    }
}

?>