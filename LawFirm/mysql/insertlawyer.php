<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Lawfirm";

$connection = mysqli_connect($servername, $username, $password, $dbname)
                or die ('Could not Connect to database server'.mysqli_connect_error());

                $name = $_POST['name'];
                $email = $_POST['email'];
                $qualification = $_POST['qualification'];
                $description = $_POST['description'];
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
                        if ($gender == 'Male'){
                            move_uploaded_file($file_tmp,"../Img/Lawyermale/".$file_name);
                            echo "Success <br/>";
                        } 
                        elseif ($gender == 'Female'){
                            move_uploaded_file($file_tmp,"../Img/Lawyerfemale/".$file_name);
                            echo "Success <br/>";
                        }                
                    }
                    else
                    {
                        print_r($errors);
                    }
                        var_dump(explode('.',$_FILES['upload']['name']));
                }
            
            if ($gender == 'Male'){
                if(empty($errors)==true){
                    $query1 = "INSERT INTO LawyerMale (Name, Email, Qualification, Description, Image) 
                    VALUES ('$name','$email','$qualification','$description','$file_name')";
                    $data1 = mysqli_query($connection,$query1);
                    if($data1)
                    {
                        echo "Data inserted into database";
                    }
                    else
                    {
                        echo "Failed to insert data into database";
                    } 
                }   
            }
            elseif ($gender == 'Female'){
                if(empty($errors)==true){
                    $query2 = "INSERT INTO Lawyerfemale (Name, Email, Qualification, Description, Image) 
                    VALUES ('$name','$email','$qualification','$description','$file_name')";
                    $data2 = mysqli_query($connection,$query2);
                    if($data2)
                    {
                        echo "Data inserted into database";
                    }
                    else
                    {
                        echo "Failed to insert data into database";
                    } 
                }  
            }
                                        
                
?>

