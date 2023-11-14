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
            
               <?php include "up.php";  ?>
        <hr><hr><hr>
        <form method="post" action="#"/>
        
        <h2 class="hed1">Contact Us</h2>
              
        <div class="bor">      
              
        <p style="font-family:sans-serif; font-weight: bolder; font-size: 26px; text-shadow: -4px 4px 6px gray">Fill out this form :</p>
        
        <p><label style="font-family:sans-serif;font-weight: bolder font-size: 20px;">
            First name: <br>
            <input name="Fname" type="text" placeholder="First name"/> 
            </label></p>
        
        <p><label style="font-family:sans-serif; font-weight: bolder font-size: 20px;">
                Last name: <br>
            <input name="Lname" type="text" placeholder="Last name"/>
            </label></p>
        
        <p><label style="font-family:sans-serif; font-weight: bolder font-size: 20px;">
            Subject: <br>
            <textarea name="Subject" rows="10" cols="40" placeholder="tell us"></textarea>
            </label></p>
        <input type="submit" value="submit"> <input type="reset" value="clear">
        
        </div>
    </body>
    <footer>
    <hr>
    <p style="text-align: center; color: whitesmoke; font-family: monospace; font-size: 18px; font-weight: bold; font-style: italic; text-shadow: -2px 2px 3px whitesmoke;"> Created By Abdulrahman Bin Rushud &amp; Saad Al-Maghnam &reg;</p>
    
    </footer>

</html>