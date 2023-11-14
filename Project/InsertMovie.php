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
			   
		if(isset($_POST['add'])){
		$name =$_POST['name'];
		$desc =$_POST['desc'];
		$cid =$_POST['cid'];
		$logo ="";
        $ryear=$_POST['ryear'];
        $moviel=$_POST['moviel'];
        $du=$_POST['du'];
        $movier=$_POST['movier'];
        $tr=$_POST['tr'];
		
    if(isset($_FILES['logo']))
   {
    if( $_FILES['logo']['name'] != "" )
				   {
				    $finfo = finfo_open(FILEINFO_MIME_TYPE);
                if(strpos(finfo_file($finfo, $_FILES['logo']['tmp_name']),"image")==0) {    
                    	$logo =addslashes (file_get_contents($_FILES['logo']['tmp_name']));
				   }
		 }
	}
             $query="INSERT INTO `item`( `name`, `logo`, `description`, `categoryID` ,`year`,`language`,`duration`, `rating`,`trailer`)  VALUES
             ('".addslashes($name)."','$logo','".addslashes($desc)."','$cid','$ryear','$moviel','$du','$movier','$tr')";
			
if(!mysqli_query($conn,$query))
	die(mysqli_error()); 	
else{  echo "<center><p style = 'color: black;text-shadow: -2px 2px 3px whitesmoke; font-family: cursive; font-size: 40px; background-color: gray;'>Inserting Complete</p></center>";}
}

    ?>
			   
        <hr><hr><hr>
             <form method="post" action="" enctype="multipart/form-data" >
              
              <p class="hed1"> Insert Movie </p>
              <div class="bor">
              
              <p class="im">
            Movie Name: <br>
            <input name="name" type="text" placeholder="Movie Name" required /> 
            </p>
              
            
              
              <p class="im">
            Category: <br>
			<select name="cid" required> 
			<?php
			$query="select * from category";
			 
if(!$result=mysqli_query($conn,$query))
	die(mysqli_error()); 
while($row=mysqli_fetch_assoc($result)){
	
	$ci=$row['ID'];$cn=$row['name'];
	
	echo"<option value='$ci'>$cn</option>";
}

			?>
			</select> 
            
              </p>
                
                  <p class="im">
            Release year: <br>
            <input name="ryear" type="text" placeholder="Releas Year"/> 
              </p>
              
                <p class="im">
            Movie language: <br>
            <input name="moviel" type="text" placeholder="Movie language"/> 
              </p>
                  <p class="im">
            Duration: <br>
            <input name="du" type="text" placeholder="Duration"/> 
              </p>
            
              
              <p class="im">
            Movie rating: <br>
            <input name="movier" type="text" placeholder="Movie rating"/> 
              </p>
                  <p class="im">
            Trailer: <br>
            <input name="tr" type="url" placeholder="Traile"/> 
              </p>
                  <p class="im">
            Desciption: <br>
			 <textarea name="desc" cols="30" rows="4" maxlength="3000" placeholder="Desciption"  required ></textarea>
            
              </p>
                   <p class="im">
            Logo: <br>
            <input name="logo" type="file" placeholder="Poster" required/> 
              </p>
                  
            
              <input type="submit" name="add" value="submit"> <input type="reset" value="clear">
              
            </div>  
			</form>
			</body>
              <footer>
    <hr>
    <p style="text-align: center; color: whitesmoke; font-family: monospace; font-size: 18px; font-weight: bold; font-style: italic; text-shadow: -2px 2px 3px whitesmoke;"> Created By Abdulrahman Bin Rushud &amp; Saad Al-Maghnam &reg;</p>
    
    </footer>

</html>