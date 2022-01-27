<!DOCTYPE html>
<html>
    <head>
        <title>Female Lawyers</title>
        <link rel="stylesheet" href="viewmessages.css">
    </head>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Lawfirm";

    $connection = mysqli_connect($servername, $username, $password, $dbname)
    or die ('Could not Connect to database server'.mysqli_connect_error());

    $query=mysqli_query($connection,"select * from Messages");
                        while($row=mysqli_fetch_array($query)){
    ?>

    <body>
        <div class="Header">
            <div class="Container">
                <div class="NavBar">
                    <div class="Logo" >
                        <img src="Img/law.png" >
                    </div>

                    <div class="slogan">
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
            <table border="50">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                  </tr>
                  <tr>
                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['Email']; ?></td>
                    <td><?php echo $row['Message']; ?></td>
                  </tr>
                  <?php
                    }
            ?>
            </table>
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