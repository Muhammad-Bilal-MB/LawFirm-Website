<?php
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Lawfirm";

    $connection = mysqli_connect($servername, $username, $password, $dbname)
    or die ('Could not Connect to database server'.mysqli_connect_error());

	$id=$_GET['Id'];
 
	$name = $_POST['Name'];
    $email = $_POST['Email'];
    $qualification = $_POST['Qualification'];
    $description =  $_POST['Description'];
    $file_name = $_FILES["Image"]["name"];

    if(!empty($_FILES["Image"]["name"])){
        $errors = array();
        $file_size = $_FILES['Image']['size'];
        $file_tmp = $_FILES['Image']['tmp_name'];
        $file_type = $_FILES['Image']['type'];
        $file_ext = strtolower(end(explode('.',$_FILES['Image']['name'])));
        $extensions = array("jpeg","jpg","png");
        if(in_array($file_ext,$extensions) === false){
           $errors[]="Extension not allowed, please choose a JPEG or PNG file.";}
        if($file_size > 2097152) {
           $errors[]='File size must be excately 2 MB';}  
        if(empty($errors)==true) {  
            move_uploaded_file($file_tmp,"../Img/Lawyermale/".$file_name);
            echo "Success <br/>";               
        }
        else
        {
            print_r($errors);
        }
            var_dump(explode('.',$_FILES['upload']['name']));
    }
 
	mysqli_query($connection,"update Lawyermale set Name='$name', Email='$email', Qualification='$qualification', 
                Description='$description', Image='$file_name' where Id='$id'");
	header('location:adminlawyermale.php');
?>