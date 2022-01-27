<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Lawfirm";

$connection = mysqli_connect($servername, $username, $password, $dbname)
                or die ('Could not Connect to database server'.mysqli_connect_error());

?>

<?php

$sql = "CREATE TABLE Messages(".
        "Id INT NOT NULL AUTO_INCREMENT,".
        "Name VARCHAR(100) NOT NULL,".
        "Email VARCHAR(100) NOT NULL,".
        "Message VARCHAR(2000) NOT NULL,".
        "PRIMARY KEY (Id));";

if ($connection->query($sql) === TRUE  ) {
        echo "Table Messages created successfully";
} 
else {
        echo "Error creating table: " . $connection->error;
}

?>
