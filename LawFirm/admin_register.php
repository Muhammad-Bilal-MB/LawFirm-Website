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

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['cpassword'];
    $gender;

    $db_username = "SELECT * FROM admins Where Email = '$email'";
    $data = $link->query($db_username);

    if($data-> num_rows > 0){               //Checking for already taken username
        echo '<script>alert("Username already taken")</script>';   
    }
    else{
        
        if ($password == $confirmPassword){          //Checking password matching, confirming password
            $query = " INSERT INTO admins (Name, Email, Password, Confirm_Password) 
            VALUES ('$name', '$email', '$password', '$confirmPassword')";
            $data = mysqli_query($link,$query);
            
            if($data)
            {
                echo "Data inserted into database";
            }
            else
            {
                echo "Failed to insert data into database";
            }    

        }
        else{
            echo '<script>alert("Password and Confirm Password do not match")</script>';  
        }
        
    }
    


?>