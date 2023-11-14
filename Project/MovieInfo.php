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
			   $mid="";
if(isset($_GET['mid']))
	$mid=$_GET['mid'];
	
		if(isset($_POST['send'])){
		$rn =$_POST['rn'];
		$rb =$_POST['rb'];
		$rv =$_POST['rv'];
		
$query="INSERT INTO `review`( `item_id`, `name`, `body`, `rating`)  VALUES
             ('$mid','$rn','$rb','$rv')";
			
if(!mysqli_query($conn,$query))
	die(mysqli_error()); 	

}
?>
              <hr><hr><hr>
              
            <div class="bor4"><div class='form'>
                  <form action="" method="post" >
              <h1 style="text-align: center; color: black; font-family: fantasy; font-size: 30px; text-shadow: -2px 2px 6px gray"> Add Review </h1>
              <span style="text-align: center; color: black; font-family: fantasy; font-size: 20px; text-shadow: -2px 2px 6px gray"> Name: </span>
              <input type="text" name="rn" placeholder="Name"><br>
              <span style="text-align: center; color: black; font-family: fantasy; font-size: 20px; text-shadow: -2px 2px 6px gray"> Rating:</span> 
             <select name="rv">
			 <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>
			 </select><br><hr>
              <span style="text-align: center; color: black; font-family: fantasy; font-size: 20px; text-shadow: -2px 2px 6px gray"> Review:</span><br>
              <textarea rows="5" col= "30" name="rb" id="bodyText" placeholder="Your review"></textarea><br><hr>
              <input type="submit" id="addComent"  name="send" value="Send" />
			  </form>
              </div>
              
              <div id='container'>
			  <?php
			$query="select * from review where item_id='".$mid."' order by ID desc";
			 
if(!$result=mysqli_query($conn,$query))
	die(mysqli_error()); 
while($row=mysqli_fetch_assoc($result)){
	
	$rn=$row['name'];$rb=$row['body'];$rv=$row['rating'];
	
	echo '  <div class="commentBox">
			  <div class="leftPanelImg"><img src="Posters/user.png" width="40px" height="40px" alt="User image" /></div>
			  <div class="rightPanel">
			  <span>Name: '.$rn.' </span>
			  <div class="date">
			  <img src="Posters/'.$rv.'.png" width="200px" height="40px" alt="'.$rv.'" />
			  </div>
			  <p>The Review:  '.$rb.'</p>
			  </div>
			  <div class="clear"></div>
			  </div>';
}

			?>
			
			  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

                  
   
              </div>
			  <?php
			  		  $all=0;	
$overall_rating="Not rated yet";		

			  	$query="select count(*) as c from review where item_id='".$mid."'";
	
if(!$result=mysqli_query($conn,$query)){
	die(mysqli_error()); 
}
else{
$row=mysqli_fetch_assoc($result);
$all=$row['c'];
}
if($all>0){
	$r1=0;$r2=0;$r3=0;$r4=0;$r5=0;
$query="select count(*) as c from review where item_id='".$mid."' and rating='5'";			 
if(!$result=mysqli_query($conn,$query)){
	die(mysqli_error()); 
}
else{
$row=mysqli_fetch_assoc($result);
$r5=$row['c'];
}
$query="select count(*) as c from review where item_id='".$mid."' and rating='4'";			 
if(!$result=mysqli_query($conn,$query)){
	die(mysqli_error()); 
}
else{
$row=mysqli_fetch_assoc($result);
$r4=$row['c'];
}
$query="select count(*) as c from review where item_id='".$mid."' and rating='3'";			 
if(!$result=mysqli_query($conn,$query)){
	die(mysqli_error()); 
}
else{
$row=mysqli_fetch_assoc($result);
$r3=$row['c'];
}
$query="select count(*) as c from review where item_id='".$mid."' and rating='2'";			 
if(!$result=mysqli_query($conn,$query)){
	die(mysqli_error()); 
}
else{
$row=mysqli_fetch_assoc($result);
$r2=$row['c'];
}
$query="select count(*) as c from review where item_id='".$mid."' and rating='1'";			 
if(!$result=mysqli_query($conn,$query)){
	die(mysqli_error()); 
}
else{
$row=mysqli_fetch_assoc($result);
$r1=$row['c'];
}

$overall_rating= (($r5*5)+($r4*4)+($r3*3)+($r2*2)+($r1*1))/$all;


}else {//لايوجد تقييم
$overall_rating="Not rated yet";	
}
	
			  
			  
			  $query="select * from item where ID=$mid";
			 
if(!$result=mysqli_query($conn,$query))
	die(mysqli_error());  
$row=mysqli_fetch_assoc($result);
        $name =$row['name'];
		$desc =$row['description'];
		$cid =$row['categoryID'];
		$logo =$row['logo'];
		$src ='data:image/jpg;base64,'.base64_encode( $logo );
        $ryear =$row['year'];
        $moviel =$row['language'];
        $du = $row['duration'];
        $movier =$row['rating'];
        $tr =$row['trailer'];
        $query="select * from category where ID=$cid";
			 
if(!$result=mysqli_query($conn,$query))
	die(mysqli_error());  
$row=mysqli_fetch_assoc($result);
$cname =$row['name'];
		?>
              <div class="bor3">
                  
              <table border="3">
                  
                  <caption style="text-align: center; color: black; width: bolder; font-size: 20px; font-family:serif"><strong><?php echo $name;?></strong></caption>
                      
              <tbody>
              <tr><td><span style="position: relative ; left: 2%"><img src="<?php echo $src;?>" width="300" height="400" alt="Click me to i can move you to the movies page "></span></td>
                  <th><p style="text-align: center">Trailer :<br> <a href="<?php echo $tr;?>" target="_blank"><img src="Posters/Trailer.png" width="190" height="200" alt="Click it to go to the trailer"></a>
                      
                      </p><hr><span style="text-align: left; font-size: 12px"> Description: <hr><?php echo $desc;?></span></th></tr>
                  
                  <tr><th colspan="2"> Release year: <?php echo $ryear;?> .</th></tr>
                  <tr><th colspan="2"> Film language: <?php echo $moviel;?></th></tr>
                  <tr><th colspan="2"> Category: <?php echo $cid;?> </th></tr>
                  <tr><th colspan="2"> Duration: <?php echo $du;?></th></tr>
                  <tr><th colspan="2"> Film rating: <?php echo $movier;?></th></tr>
				    <tr><th colspan="2"> Users rating: <?php echo $overall_rating;?></th></tr>
                  
                  
            
              </tbody>
              </table>
              </div>
              </body>
    <footer>
    <hr>
    <p style="text-align: center; color: whitesmoke; font-family: monospace; font-size: 18px; font-weight: bold; font-style: italic; text-shadow: -2px 2px 3px whitesmoke;"> Created By Abdulrahman Bin Rushud &amp; Saad Al-Maghnam &reg;</p>
    </footer>

</html>