<?php
	
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Lawfirm";

    $connection = mysqli_connect($servername, $username, $password, $dbname)
    or die ('Could not Connect to database server'.mysqli_connect_error());

	$id = $_GET['Id'];
	$query = mysqli_query($connection,"select * from Lawyermale where Id='$id'");
	$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="maleupdate.php?Id=<?php echo $id; ?>" enctype="multipart/form-data">
		<label>Name:</label><input type="text" value="<?php echo $row['Name']; ?>" name="Name">
		<label>Email:</label><input type="text" value="<?php echo $row['Email']; ?>" name="Email">
        <label>Qualification:</label><input type="text" value="<?php echo $row['Qualification']; ?>" name="Qualification">
        <label>Description:</label><input type="text" value="<?php echo $row['Description']; ?>" name="Description">
        <label>Image:</label><input type="text" value="<?php echo $row['Image']; ?>" name="Image">
        <input type="file" value="<?php if (empty($row['Image'])){ echo $row['Image']; }?>" name="Image" accept="image/*">
		<input type="submit" name="submit">
		<a href="adminlawyermale.php">Back</a>
	</form>
</body>
</html>