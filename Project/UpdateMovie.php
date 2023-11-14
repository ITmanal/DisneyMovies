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
               <form method="post" action="UpdateMovie1.php">
              
              <p class="hed1"> Update Movie </p>
              <div class="bor">
              
              <p class="im">
            Choose Movie: <br>
            <select name="mid" required > 
			<?php
			$query="select * from item";
			 
if(!$result=mysqli_query($conn,$query))
	die(mysqli_error()); 
while($row=mysqli_fetch_assoc($result)){
	
	$ci=$row['ID'];$cn=$row['name'];
	
	echo"<option value='$ci'>$cn</option>";
}

			?>
			</select> 
            </p>
                   <input type="submit" name="update" value="submit"> <input type="reset" value="clear">
              </div>
              </form>
              
                </body>
    <footer>
    <hr>
    <p style="text-align: center; color: whitesmoke; font-family: monospace; font-size: 18px; font-weight: bold; font-style: italic; text-shadow: -2px 2px 3px whitesmoke;"> Created By Abdulrahman Bin Rushud &amp; Saad Al-Maghnam &reg;</p>
    
    </footer>

</html>