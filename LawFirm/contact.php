<html>
    <head>       
        <title>The Firm </title>
        <link rel="stylesheet" href="contact.css">
    </head>
    <body>
        <div class="Header">
            <div class="Container">
                <div class="NavBar">
                    <div class="Logo" >
                        <img src="Img/law.png" >
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
                                <a href="../mysite/Lawyersmale.php" >Male</a>
                                <a href="../mysite/Lawyersfemale.php">Female</a>
                            </div>
                        </li>
                    </div>
                    <li style="display: inline-block;">
                        <a href="../mysite/contact.html" style="color: whitesmoke; font-size: 18px; text-decoration: none; text-align: center; padding: 14px;">
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

                  <div class="detail" >

                    <br><br><a>Contact Details</a>
                    
                    <p>
                        Mailing Address<br>
                        123 Anywhere St. Any City, ST 12345<br><br>
        
                        Email Address<br>
                        sp19-bcs-014@cuiatk.edu.pk<br><br>
        
                        Phone Number<br>
                        (123) 456-7890<br>
                    </p>

                  </div>

                  <div class="main">
      
                    <h1>Contact Us</h1>

                    <form method="post" action="sendmessage.php">
                        <input type="text" placeholder="Name" name="name" required>
                        <br>
                        <input type="email" placeholder="Email" name="email" required>
                        <br>
                        <textarea placeholder="Message" style="width: 378px; height: 100px; margin: 5px;" name="message" required></textarea>
                        <br>
                        <p><button type="submit" name="submit" id="send_btn">Send</button></p>
                    </form>  
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

