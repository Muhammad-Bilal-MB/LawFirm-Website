<html>
    <head>
        <script type="text/javascript">
             function fun() {  
               alert ("Are you Sure?");    
            }
        </script>
        <title>The Firm </title>
        <link rel="stylesheet" href="adminhome.css">
    </head>
    <body>
        <div class="Header">
            <div class="Container">
                <div class="NavBar">
                    <div class="Logo" >
                        <img src="Img/law.png" >
                    </div>
                    
                    <div class="session" style="color: whitesmoke; font-size: 12px; height: 10px; width: 20px; padding-left: 650px;">
                    <?php
                        session_start();
                        if ($_SESSION["email"]){
                            echo $_SESSION["email"];
                        }
                        ?>
                    </div>
                </div> 
            </div> 
        </div>

        <div id="id02" class="modal2">
  
            <form class="modal-content2" action="mysql/insertlawyer.php" method="post" enctype="multipart/form-data">
                
                <div class="data">
                    <h1 style="text-align: center; padding-bottom: 20px;">Add a New Lawyer</h1>

                    <label><b>Lawyer's Name</b></label>
                    <input type="text" placeholder="Enter Lawyer Name" name="name" required>

                    <label><b>Lawyer's Email</b></label>
                    <input type="email" placeholder="Enter Lawyer Email" name="email" required>

                    <label><b>Lawyer's Qualification</b></label>
                    <input type="text" placeholder="Enter Lawyer Qualification" name="qualification" required>

                    <label><b>Lawyer's Description</b></label>
                    <input type="text" placeholder="Enter Lawyer Description" name="description" required><br><br>

                    <label><b>Gender</b></label>
                    <input type="radio" id="male" name="gender" value="Male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="Female">
                    <label for="female">Female</label><br><br>

                    <label><b>Upload Picture</b></label>
                    <input type="file" name="upload" accept="image/*"><br><br>
      
                    <button type="submit">Add</button>
                </div>

                <span class="close">&times;</span>
            </form>
        </div>

        <div id="cc" class="Content-Container">
         
            <div class="Addlawyer">
                <h2>Add New Lawyer</h2>
                <img src="Img/addlawyer.png"><br><br>
                <button type="button" onclick="document.getElementById('id02').style.display='block'">Add Lawyer</button>
            </div>

            <div class="Editlawyer">
                <h2>Edit a Lawyer</h2>
                <img src="Img/editlawyer.png"><br><br>
                <button type="button" onclick="window.location.href='../mysite/adminlawyermale.php'">Edit Male Lawyer</button><br>
                <button type="button" onclick="window.location.href='../mysite/adminlawyerfemale.php'">Edit Female Lawyer</button>
            </div>

            <div class="Viewmsg">
                <h2>View Messages</h2>
                <img src="Img/viewmsg.png"><br><br>
                <button type="button" onclick="window.location.href='../mysite/viewmessages.php'">View Messages</button>
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
            var modal2 = document.getElementById('id02');
            var span = document.getElementsByClassName('close')[0];
            
            span.onclick = function() {
                modal2.style.display = "none";
            }

            window.onclick = function(event) {
                if (event.target == modal2){
                    modal2.style.display = "none";
                }
            }
        </script>
    </body>