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
        
<?php include "up.php";
			 if(isset($_POST['login'])){
				  $un=$_POST["UserName"];
				  $password=$_POST["Password"];
				
				  $q= "SELECT * FROM admin WHERE username ='".$un."' and password='".$password."'";
				  $r = mysqli_query($conn,$q);
				  if($r){
                  if( mysqli_num_rows($r)>0)
                  {
				     $info = mysqli_fetch_assoc($r);
				    $_SESSION['login']=true;
				      session_write_close();
				     header("Location:index.php");
                   
                  }  else
                     {
					 echo '<center><p>Incorrect User name or Password</p></center>';
					
					 }
				  }  else
                     {
					 echo '<center><p>Incorrect User name or Password</p></center>';
					
					 }
                   
}
     
			 
         echo'<hr><hr><hr>';
		  if(isset($_SESSION['login']))
            echo' <span style="text-align: center; color: whitesmoke; font-family: fantasy; font-size: 20px; text-shadow: -2px 2px 6px whitesmoke;">
		<h3>Welcomt To  Marvelous Movie </h3></span> ';
			 else
              echo'<form method="post" action="#">
              <div class="bar1">
              <br>
              <span style="position: relative; left: 30%;">
        <img src="Posters/login1.png" height="180" width="190" alt=" Desing photo "></span>
              <br>
              
               <p class="im" style="text-align: center; color: white">
            User Name: <br>
            <input name="UserName" type="text" placeholder="User Name" required/> 
            </p>
              
              <p class="im" style="text-align: center; color: white">
            Password: <br>
            <input name="Password" type="password" placeholder="Password" required/> 
            </p>
        
                  <br><br>
               <div style="position: relative; left: 20%">
               <input type="submit" name="login" value="submit"> <input type="reset" value="clear">
                   
            <br><br><br><br><br>
             <br>
                  </div>
              </div>
                  </form>';
              ?>
              </body>
              <footer>
    <hr>
    <p style="text-align: center; color: whitesmoke; font-family: monospace; font-size: 18px; font-weight: bold; font-style: italic; text-shadow: -2px 2px 3px whitesmoke;"> Created By Abdulrahman Bin Rushud &amp; Saad Al-Maghnam &reg;</p>
    
    </footer>

</html>