<html>
    <head>

        
        <title>The Firm </title>
        <link rel="stylesheet" href="adminregister.css">
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
                
            
            <div class="Content">
                
                  <div class="main1">
      
                    <h1>Admin Register</h1>
                    <form method="post" action="admin_register.php">
                        <input type="text" placeholder="Name" name="name">
                        <br>
                        <input type="email" placeholder="Email" name="email">
                        <br>
                        <input type="password" placeholder="Password" name="password">
                        <br>
                        <input type="password" placeholder="Confirm Password" name="cpassword">
                        <br>
                        <p><button type="submit" name="btn_reg">Register</button></p>
                        </form>        
                    </div>

                    <div class="main2">
      
                        <h1>Admin Login</h1>
                        <form method="post" action="admin_login.php">
                            <input type="email" placeholder="Email" name="email">
                            <br>
                            <input type="password" placeholder="Password" name="password">
                            <br>
                            <p><button type="submit" name="btn_login">Login</button></p>
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

