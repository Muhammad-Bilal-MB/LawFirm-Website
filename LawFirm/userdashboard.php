<html>
    <head>      
        <title>The Firm </title>
        <link rel="stylesheet" href="userdashboard.css">
    </head>
    <body>
        <?php
        $cookie = 1;
        setcookie("count", $cookie);

        if (isset($_COOKIE['count'])){
            $cookie = ++$_COOKIE['count'];
            setcookie("count", $cookie); 
        }
        ?>
        <div class="Header">
            <div class="Container">
                <div class="NavBar">
                    <div class="Logo" >
                        <img src="Img/law.png" >
                    </div>

                    <div class="slogan">
                        <a href="Index MediaQuery.php">Logout</a>
                        <?php
                        session_start();
                        if ($_SESSION["uname"]){?>
                           <p style="color:white; padding-left :600px;"><?php echo $_SESSION["uname"]; ?></p>
                        <?php }
                        ?>
                    </div>  
                </div> 
            </div> 
        </div>
        
        <!-------------- Featured Products-------->
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
                                <a href="../mysite/Lawyersmale.html" >Male</a>
                                <a href="../mysite/Lawyersfemale.html">Female</a>
                            </div>
                        </li>
                    </div>
                    <li style="display: inline-block;">
                        <a href="file:///C:/Users/Faizan/Desktop/mysite/mysite/Less%20Practice/index.html" style="color: whitesmoke; font-size: 18px; text-decoration: none; text-align: center; padding: 14px;">
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

            
            
            <div class="Content">


                <div class="card">
                    <img src="Img/user.jpg"  style="width:50%">
                    
                    <p><button onclick="window.location.href='../mysite/activecases.php'">Active Cases</button></p>
                    <p><button onclick="window.location.href='../mysite/adminlawyermale.php'">Hire Male Lawyers</button></p>
                    <p><button onclick="window.location.href='../mysite/adminlawyerfemale.php'">Hire Female Lawyers</button></p>
                  </div>
            
                </div>
                  
            </div>
            
            <!------Footer------->
            <div class="Footer">
                        <div class="App-Logo">
                            <img src="Img/law.png">
                        </div>
                <hr>
                <p class="Copyright">Copyright 2021 - Law Firm Website</p>
            </div>

           
    </body>
</html>

