<?php
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Lawfirm";

    $connection = mysqli_connect($servername, $username, $password, $dbname)
    or die ('Could not Connect to database server'.mysqli_connect_error());

    $id=$_GET['Id'];

	mysqli_query($connection,"delete from Lawyermale where Id='$id'");
	header('location:adminlawyermale.php');
?>