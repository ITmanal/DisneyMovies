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
			   
		if(isset($_POST['update1'])){
		$name =$_POST['name'];
		$desc =$_POST['desc'];
		$cid =$_POST['cid'];
		$mid =$_POST['mid'];
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
	if($logo=="")
$query="UPDATE `item` SET 
		`name`='".addslashes($name)."', `description`='".addslashes($desc)."', `categoryID`='$cid' ,`year`='$ryear',`language`='$moviel',`duration`='$du',`rating`='$movier',`trailer`='$tr'
			WHERE ID='$mid'";
else
	$query="UPDATE `item` SET `name`='".addslashes($name)."',`logo`='$logo',`description`='".addslashes($desc)."',`categoryID`='$cid',`year`='$ryear',`language`='$moviel',`duration`='$du',`rating`='$movier',
    `trailer`='$tr'  
			WHERE ID='$mid'";
			
if(!mysqli_query($conn,$query))
	die(mysqli_error()); 	
else{  
echo "<center><p style = 'color: black;text-shadow: -2px 2px 3px whitesmoke; font-family: cursive; font-size: 40px; background-color: gray;'>Updating Complete </p></center>";
header("Location:UpdateMovie.php");

}
}
if(isset($_POST['update'])){
		$mid =$_POST['mid'];
$query="select * from item where ID=$mid";
			 
if(!$result=mysqli_query($conn,$query))
	die(mysqli_error());  
$row=mysqli_fetch_assoc($result);
        $name =$row['name'];
		$desc =$row['description'];
		$cid =$row['categoryID'];
		$logo =$row['logo'];
		$src='data:image/jpg;base64,'.base64_encode( $logo );
        $ryear =$row['year'];
        $moviel =$row['language'];
        $du = $row['duration'];
        $movier =$row['rating'];
        $tr =$row['trailer'];
		
		
			echo'
			<hr><hr><hr>
			<form method="post" action="" enctype="multipart/form-data" >
               <input name="mid" type="hidden" value="'.$mid.'" required /> 
              <p class="hed1"> Update Movie </p>
              <div class="bor">
              
              <p class="im">
            Movie Name: <br>
            <input name="name" type="text" value="'.$name.'" placeholder="Movie Name" required /> 
            </p>
           
              <p class="im">
            Category: <br>
			<select name="cid" required /> ';
			
			$query="select * from category";
			 
if(!$result=mysqli_query($conn,$query))
	die(mysqli_error()); 
while($row=mysqli_fetch_assoc($result)){
	
	$ci=$row['ID'];$cn=$row['name'];
	if($ci==$cid)
	   echo"<option value='$ci' selected>$cn</option>";
   else
	    echo"<option value='$ci'>$cn</option>";
}
		echo'</select> 
            
              </p>
			  
              <p class="im">
            Desciption: <br>
            <textarea name="desc" cols="40" rows="5" maxlength="3000" placeholder="Desciption"  required > '.$desc.'</textarea>
              </p>
              
              <p class="im">
            Current Logo: <br/>
			<img src="'.$src.'" width="100px" height="100px" />
			  </p>
			  <p class="im">
			Change Logo: <br/>
            <input name="logo" type="file" placeholder="Poster" /> 
              </p>
              <p class="im">
            Release year: <br>
            <input name="ryear" type="text" value="'.$ryear.'"/> 
              </p>
              
                <p class="im">
            Movie language: <br>
            <input name="moviel" type="text" value= "'.$moviel.'"/> 
              </p>
                  <p class="im">
            Duration: <br>
            <input name="du" type="text" value= "'.$du.'"/> 
              </p>
            
              
              <p class="im">
            Movie rating: <br>
            <input name="movier" type="text" value= "'.$movier.'"/> 
              </p>
                  <p class="im">
            Trailer: <br>
            <input name="tr" type="url" value= "'.$tr.'"/> 
              </p>
                  
            
              <input type="submit" name="update1" value="submit"> <input type="reset" value="clear">
              
            </div>  
			</form>';
	}
	
?>
			   
    
    
              
                </body>
    <footer>
    <hr>
    <p style="text-align: center; color: whitesmoke; font-family: monospace; font-size: 18px; font-weight: bold; font-style: italic; text-shadow: -2px 2px 3px whitesmoke;"> Created By Abdulrahman Bin Rushud &amp; Saad Al-Maghnam &reg;</p>
    
    </footer>

</html>