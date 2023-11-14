<?php session_start();?>
<!DOCTYPE html>
<html>
    
    <head>
    <meta charset="utf-8">
    <title> Disney Movie's </title>
    <link rel="stylesheet" type="text/css" href="Css.css">
    <link rel="shortcut icon" href="Posters/marvelicon1.png">
    </head>
    
          <body>
        
               <?php include "up.php";?>
			   
        <hr><hr><hr>
              
        <form method="post" action="#"/>
        

              <h2 class="hed1"> Choose the type of administration </h2>
              
              <a href="DeleteMovie.php"><span style="position: relative; left: .5%;"><img src="Posters/delete1.png" width="350" height="350" alt="Click me to i can move you to the delete movie page"></span></a>
              
              <a href="UpdateMovie.php"> <span style="position: relative; left: 11%;"><img src="Posters/update1.png" width="350" height="350" alt="Click me to i can move you to the update movie page "></span></a>
              
              <a href="InsertMovie.php"> <span style="position: relative; left: 21%;"><img src="Posters/insert2.png" width="350" height="350" alt="Click me to i can move you to the insert movie page "></span></a>
              
              
              </body>
    <footer>
    <hr>
    <p style="text-align: center; color: whitesmoke; font-family: monospace; font-size: 18px; font-weight: bold; font-style: italic; text-shadow: -2px 2px 3px whitesmoke;">Created By Abdulrahman Bin Rushud &amp; Saad Al-Maghnam &reg;</p>
    </footer>

</html>