<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Lawfirm";

$connection = mysqli_connect($servername, $username, $password, $dbname)
                or die ('Could not Connect to database server'.mysqli_connect_error());

        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $query1 = "INSERT INTO Messages (Name, Email, Message) 
                    VALUES ('$name','$email','$message')";
                    $data1 = mysqli_query($connection,$query1);
                    if($data1)
                    {
                        echo "Data inserted into database";
                    }
                    else
                    {
                        echo "Failed to insert data into database";
                    }             
?>

