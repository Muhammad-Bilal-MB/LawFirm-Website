<!DOCTYPE html>
<html>
    <head>
        <title>Female Lawyers</title>
        <link rel="stylesheet" href="adminlawyerfemale.css">
    </head>

    <body>
        <div class="Header">
            <div class="Container">
                <div class="NavBar">
                    <div class="Logo" >
                        <img src="Img/law.png" >
                    </div>

                    <div class="slogan">
                        <h2>Your Trust Comes First</h2>
                        <a href="adminhome.php">Admin Home</a>
                        <?php
                        session_start();
                        if ($_SESSION["email"]){?>
                           <p style="color:white; padding-left :600px;"><?php echo $_SESSION["email"]; ?></p>
                        <?php }
                        ?>
                    </div>
                </div>
            </div> 
        </div>

        <div id="cc" class="Content-Container">
            
        </div>
        <br>
        <div>
            <table border="50">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Qualification</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    <?php
                        
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "Lawfirm";

                        $connection = mysqli_connect($servername, $username, $password, $dbname)
                        or die ('Could not Connect to database server'.mysqli_connect_error());

                        $query=mysqli_query($connection,"select * from LawyerFemale");
                        while($row=mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td><?php echo $row['Name']; ?></td>
                                <td><?php echo $row['Email']; ?></td>
                                <td><?php echo $row['Qualification']; ?></td>
                                <td><?php echo $row['Description']; ?></td>
                                <td><?php echo $row['Image']; ?></td>
                                <td><a href="femaleedit.php?Id=<?php echo $row['Id']; ?>">Edit</a></td>    
                                <td><a href="femaledelete.php?Id=<?php echo $row['Id']; ?>">Delete</a></td>
                            </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>

        </div>

        <div class="Footer">
            <div class="App-Logo">
                <img src="Img/law.png">
            </div>
            <hr>
            <p class="Copyright">Copyright 2021 - Law Firm Website</p>
        </div>
    </body>
</html>