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
			
			  ?>
        <hr><hr>
            <span style="text-align: center; color: whitesmoke; font-family: fantasy; font-size: 20px; text-shadow: -2px 2px 6px whitesmoke;"><h1> The Movie's List </h1><h3> * Choose Your Movie To Display It's Information * </h3></span>
              
          
			 <?php
$query1="select * from category";
			 
if(!$result1=mysqli_query($conn,$query1))
	die(mysqli_error()); 
while($row1=mysqli_fetch_assoc($result1)){
	echo "<br> <hr><hr>";
	$cname =$row1['name'];
		$cid =$row1['ID'];
                echo'<h1 class="hed1"> '.$cname.' </h1>';
							
			$query="select * from item Where categoryID='".$cid."'";
			 
    if(!$result=mysqli_query($conn,$query))
	die(mysqli_error()); 
    while($row=mysqli_fetch_assoc($result)){
	    $name =$row['name'];
		$desc =$row['description'];
		$logo =$row['logo'];
		$src='data:image/jpg;base64,'.base64_encode( $logo );
	    $mid=$row['ID'];
        $ryear =$row['year'];
        $moviel =$row['language'];
        $du = $row['duration'];
        $movier =$row['rating'];
        $tr =$row['trailer'];
              
        
            echo'<a href="MovieInfo.php?mid='.$mid.'"> <span style="position: relative; left: 5%;"><img src="'.$src.'" width="300" height="400" alt="Click me to i can move you to the movies page "></span></a>
            ' ;
    
}
}
?>
              
    </body>
<footer>
    <hr>
    <p style="text-align: center; color: whitesmoke; font-family: monospace; font-size: 18px; font-weight: bold; font-style: italic; text-shadow: -2px 2px 3px whitesmoke;"> Created By Abdulrahman Bin Rushud &amp; Saad Al-Maghnam &reg;</p>
    
    </footer>

</html>