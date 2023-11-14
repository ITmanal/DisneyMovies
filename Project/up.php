<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Disney";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");
// Check connection
if(mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
}
?>
 <header>
             <br><br><br><br><br>
             <br><br><br><br><br>
             <br><br><br><br><br>
             <br><br><br><br><br>
              </header>
              
           <div class="bar">  
           <nav><hr>Menu<hr>
       <ul>
       <li><a href="index.php">Home</a></li>
       <li><a href="Movie.php">Movie's</a></li>
       <li><a href="AboutUs.php"> About Us </a></li>
       <li><a href="ContactUs.php"> Contact Us </a></li>
	   <?php
	    if(isset($_SESSION['login']))
       echo'<li><a href="AdminControlPanel.php"> Control Panel </a></li>';
   ?>
   
       </ul>
           </nav>
             
          
			<?php
	    if(isset($_SESSION['login']))
          echo'   <a href="Logout.php"> <button class="b1"><hr> <span style="font-family: fantasy">Logout</span> <hr></button> </a>';
		?>
               <?php
	    if(!isset($_SESSION['login']))
          echo'   <a href="login.php"> <button class="b1"><hr> <span style="font-family: fantasy">Log-in</span> <hr></button> </a>';
		?>
           
    
            </div> 
              
              
              
            <p class="hed1"> Disney website </p>