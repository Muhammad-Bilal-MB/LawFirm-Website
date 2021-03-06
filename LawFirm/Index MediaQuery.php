<html>
    <head>
        <script type="text/javascript">
             function fun() {  
               alert ("Are you Sure?");  
               
            }
        </script>
        <title>The Firm </title>
        <link rel="stylesheet" href="MediaQuery.css">
    </head>
    <body>
        <div class="Header">
            <div class="Container">
                <div class="NavBar">
                    <div class="Logo" >
                        <img src="Img/law.png" >
                    </div>
                    <nav id="linkshere">
                        <ul>            
                            <li><a onclick="document.getElementById('id02').style.display='block'">SignUp</a></li>
                            <li><a id="opener" onclick="document.getElementById('id01').style.display='block'">Login</a></li>
                        </ul>
                    </nav>
                </div> 
            </div> 
        </div>

        <div id="id01" class="modal">
  
            <form class="modal-content" method="post" action="user_login.php">
                
                <div class="data">
                    <h1 style="text-align: center; padding-bottom: 20px;">Login to The Law Firm</h1>

                    <label><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>
      
                    <label><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>
      
                    <button type="submit" name="loginbtn">Login</button>
                    <input type="checkbox" checked="checked"> Remember me
                </div>
      
                <div class="data" style="background-color:black; border-radius: 20px; opacity: 90%;" >
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    <span class="psw">Forgot <a href="#" style="color: #bf996f">password?</a></span>
                </div>

                <span class="close">&times;</span>
            </form>
        </div>

        <div id="id02" class="modal2">
  
            <form class="modal-content2" method="post" action="user_register.php" enctype="multipart/form-data">
                
                <div class="data">
                    <h1 style="text-align: center; padding-bottom: 20px;">Sign Up for The Law Firm</h1>

                    <label><b>First Name</b></label>
                    <input type="text" placeholder="Enter First Name" name="fname" required>

                    <label><b>Last Name</b></label>
                    <input type="text" placeholder="Enter Last Name" name="lname" required>

                    <label><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>

                    <label><b>Email</b></label>
                    <input type="email" placeholder="Enter Email" name="email" required>
      
                    <label><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <label><b>Confirm Password</b></label>
                    <input type="password" placeholder="Retype Password" name="cpsw" required><br><br>

                    <label><b>Gender</b></label>
                    <input type="radio" id="male" name="gender" value="Male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="Female">
                    <label for="female">Female</label><br><br>

                    <label><b>Upload Picture</b></label>
                    <input type="file" name="upload" accept="image/*"><br><br>
      
                    <button type="submit" name="signupbtn">Sign Up</button>
                </div>
      
                <div class="data" style="background-color:black; border-radius: 20px; opacity: 90%;" >
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    <span class="supgmail">Sign up with <a href=""><img src="Img/gmail.png" style="width: 50px; height: auto;"></a></span>
                </div>

                <span class="close">&times;</span>
            </form>
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

            <h1>THE FIRM</h1>
            
            <div class="Content">
            
            <p>
    The Law Firm aspires to be the foremost innovative law firm by building long-term relationships with clients based on reciprocity, trust and highest standards of professional ethics. By adopting new models for the delivery of legal services, we strive to redefine the role that a law firm plays in an emerging regional market, in order to produce truly exceptional results for our clients.

    The firm was founded through one of the first-ever local mergers of a number of prominent law firm spinoffs, joined by other leading lawyers and professionals, all brought together by a shared vision. A vision to create a true corporate meritocracy dedicated to excellence in the practice of law. The sole measures of our success are concrete results and client satisfaction.

    To this end we have rigorously implemented a business model similar to that of some of the most prominent U.S. and U.K. law firms. This approach promotes a careful selection of matters, with a flexibility to meet client???s needs, tailor our solutions correspondingly and dedicate our best people to the task at hand.</p>
                        <a class="Btn" onclick="fun();">Explore Now</a>
            
            
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

            <script>
                var modal = document.getElementById('id01');
                var modal2 = document.getElementById('id02');
                var span = document.getElementsByClassName('close')[0];
                var span2 = document.getElementsByClassName('close')[1];
                
                span.onclick = function() {
                    modal.style.display = "none";
                }

                span2.onclick = function() {
                    modal2.style.display = "none";
                }

                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                    if (event.target == modal2){
                        modal2.style.display = "none";
                    }
                }
            </script>
    </body>
</html>












