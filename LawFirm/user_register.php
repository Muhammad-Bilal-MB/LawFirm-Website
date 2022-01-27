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

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['psw'];
    $confirmPassword = $_POST['cpsw'];
    $gender;
    $file_name = $_FILES["upload"]["name"];
    
    if(!empty($_POST['gender'])) {
        $gender = $_POST['gender'];
    } else {
        echo 'Please select the value.';
    }

    if(!empty($_FILES["upload"]["name"])){
        $errors = array();
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $file_type = $_FILES['upload']['type'];
        $file_ext = strtolower(end(explode('.',$_FILES['upload']['name'])));
        $extensions = array("jpeg","jpg","png");
        if(in_array($file_ext,$extensions) === false){
           $errors[]="Extension not allowed, please choose a JPEG or PNG file.";}
        if($file_size > 2097152) {
           $errors[]='File size must be excately 2 MB';}  
        if(empty($errors)==true) {  
            move_uploaded_file($file_tmp,"../Img/Users/".$file_name);
            echo "Success <br/>";               
        }
        else
        {
            print_r($errors);
        }
            var_dump(explode('.',$_FILES['upload']['name']));
    }

    $db_username = "SELECT * FROM Users Where Username = '$username' or Email = '$email'";
    $data = $link->query($db_username);

    if($data-> num_rows > 0){               //Checking for already taken username
        echo '<script>alert("Username already taken")</script>';   
    }
    else{
        
        if ($password == $confirmPassword){          //Checking password matching, confirming password
            $query = " INSERT INTO Users (First_Name, Last_Name, Username, Email, Password, Confirm_Password, Gender, Image) 
            VALUES ('$fname','$lname','$username', '$email', '$password','$confirmPassword', '$gender', '$file_name')";
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