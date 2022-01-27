<!DOCTYPE html>
<html>
    <head>
        <title>Male Lawyers</title>
        <link rel="stylesheet" href="Lawyersmale.css">
    </head>

    <body>

    <!-- TODO: Connect Database -->
    <?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Lawfirm";

    $connection = mysqli_connect($servername, $username, $password, $dbname)
                    or die ('Could not Connect to database server'.mysqli_connect_error());
    ?>

    <!-- TODO: Start Session(MUST) -->
    
        <div class="Header">
            <div class="Container">
                <div class="NavBar">
                    <div class="Logo" >
                        <img src="Img/law.png" >
                    </div>

                    <div class="slogan">
                        <h2>Your Trust Comes First</h2>
                    </div>
                </div>
            </div> 
        </div>

        <div id="cc" class="Content-Container">
            <nav id="nav;" class="topnav">
                <ul style="display:flex; justify-content: center; list-style: none;">
                    <li style="display: inline-block;">
                        <a href="../mysite/Index MediaQuery.html" style="color: whitesmoke; font-size: 18px; text-decoration: none; text-align: center; padding: 14px;">
                            Home
                        </a>
                    </li>
                    <div class="dropdown">
                        <li style="display: inline-block;"><a class="dropbtn" href="#" style="color: whitesmoke; font-size: 18px; text-decoration: none; text-align: center; padding: 14px;">
                            Lawyers
                        </a>
                            <div class="dropdown-content">
                                <a href="../mysite/Lawyersmale.php" >Male</a>
                                <a href="../mysite/Lawyersfemale.php">Female</a>
                            </div>
                        </li>
                    </div>
                    <li style="display: inline-block;">
                        <a href="#" style="color: whitesmoke; font-size: 18px; text-decoration: none; text-align: center; padding: 14px;">
                            Contact Us
                        </a>
                    </li>
                    <li style="display: inline-block;">
                        <a href="../mysite/About.html" style="color: whitesmoke; font-size: 18px; text-decoration: none; text-align: center; padding: 14px;">
                            About
                        </a>
                    </li>
                </ul>
            </nav>


        <?php

        $SQL = "SELECT * FROM Lawyermale";
        $result = $connection->query($SQL);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
        ?>
                <div class="lawyer1">
                <div class="lawyer1-left">

                <h2><?= $row['Name']?></h2>
                    <!-- <h2>James Yand</h2> -->

                    <h4><?= $row['Qualification']?></h4>
                    <!-- <h4>LL.B.</h4> -->


                    <p><?= $row['Description']?>
                    </p>
                    <p><b>Email:</b><?= $row['Email']?></p>
                </div>

                <div class="lawyer1-right">
                    <img src = 'Img/Lawyermale/<?=$row['Image']?>.'/>
                    <button type="submit" id="lawyer1-contact-btn">Contact</button><br>
                    <button type="submit" id="lawyer1-hire-btn">Hire</button>
                </div>
            </div>
        <?php    
            }
        }
        ?>

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