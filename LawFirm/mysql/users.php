<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Lawfirm";

$connection = mysqli_connect($servername, $username, $password, $dbname)
                or die ('Could not Connect to database server'.mysqli_connect_error());

?>

<?php

$sql = "CREATE TABLE Users(".
        "Id INT NOT NULL AUTO_INCREMENT,".
        "First_Name VARCHAR(100) NOT NULL,".
        "Last_Name VARCHAR(100) NOT NULL,".
        "Username VARCHAR(100) NOT NULL,".
        "Email VARCHAR(100) NOT NULL,".
        "Password VARCHAR(100) NOT NULL,".
        "Confirm_Password VARCHAR(100) NOT NULL,".
        "Gender VARCHAR(100) NOT NULL,".
        "Image VARCHAR(500) NOT NULL,".
        "PRIMARY KEY (Id));";

if ($connection->query($sql) === TRUE  ) {
        echo "Table Messages created successfully";
} 
else {
        echo "Error creating table: " . $connection->error;
}

?>