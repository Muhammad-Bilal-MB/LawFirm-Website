<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Lawfirm";

$connection = mysqli_connect($servername, $username, $password, $dbname)
                or die ('Could not Connect to database server'.mysqli_connect_error());

?>

<?php

$sql = "CREATE TABLE LawyerMale(".
        "Id INT NOT NULL AUTO_INCREMENT,".
        "Name VARCHAR(100) NOT NULL,".
        "Qualification VARCHAR(100) NOT NULL,".
        "Description VARCHAR(100) NOT NULL,".
        "Image VARCHAR(500) NOT NULL,".
        "PRIMARY KEY (Id));";

$sql2 = "CREATE TABLE LawyerFemale(".
        "Id INT NOT NULL AUTO_INCREMENT,".
        "Name VARCHAR(100) NOT NULL,".
        "Qualification VARCHAR(100) NOT NULL,".
        "Description VARCHAR(100) NOT NULL,".
        "Image VARCHAR(500) NOT NULL,".
        "PRIMARY KEY (Id));";


if ($connection->query($sql) === TRUE  ) {
        echo "Table LawyerMale created successfully";
} 
else {
        echo "Error creating table: " . $connection->error;
}

if ($connection->query($sql2) === TRUE  ) {
        echo "Table LawyerFemale created successfully";
} 
else {
        echo "Error creating table: " . $connection->error;
}

?>
