<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<br><br><br><br><br><br><br>
<body style="background-image:url(PICS/DSCN5514-1.jpg)" >
<div class="w3-bar w3-top w3-indigo w3-large" style="z-index:4">
  
  <span class="w3-bar-item w3-left">AAU COMMUNITY</span>
</div>
<br>

<div class="w3-container w3-center  "style="max-width:900px; margin:0 auto; padding-top:30px; padding-bottom:30px; padding-right:30px; padding-left:30px;">


<div class="w3-row-padding" >
  <div class=" w3-half w3-card   w3-white w3-padding  " style="opacity:.7">
  
  <div class="w3-container w3-center w3-border-bottom w3-border-black">
        	<h5><strong><i class="fas fa-lock-open"></i>USER LOGIN</strong></h5>
        </div>
   <form name="form1" id="form1" class="w3-container" method="post" action="login.php">
        <div class="w3-section w3-center" style="padding:10px;">
        
        <select name="usertype" id="select" class="w3-input w3-border-black w3-border-top w3-border-left w3-border-right w3-margin-top w3-margin-bottom" >
            <option>Select User Type:</option>
            <option>Admin</option>
            <option>Professor</option>
            <option>Student</option>
          </select>
         
          <input class="w3-input w3-border-black w3-border-top w3-border-left w3-border-right w3-margin-bottom" type="text" placeholder="Enter Username" name="username" required>
          
          <input class="w3-input w3-border-black w3-border-top w3-border-left w3-border-right" type="password" placeholder="Enter Password" name="password" required>
          
          <br>
          
          <input class="w3-button w3-indigo w3-border w3-round w3-large w3-hover-gray" type="submit" name="submit" value="Login">
          
          
       </div>
      
      </form>
  </div>
 
  <div class="w3-rest">
  
  <div class="w3-card-4 w3-white w3-border-bottom w3-border-black" style="width:90%;    margin-left:40px; opacity:.7;">
    	<div class="w3-container w3-round w3-indigo" style="height:72px" >
        	<h5 align="center"><strong >LATEST NEWS</strong>  <a href="viewall.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-blue w3-small fa fa-eye" title="View All"><strong>View All...</strong></a></h5> 
        </div>
    	 <div class="w3-row-padding ">
                     <?php
		include "connect1.php";
		$sql="Select * from news order by id desc limit 3  ";
		$result=mysql_query($sql,$link);
		while($row=mysql_fetch_array($result))
		{
			echo '<div class="w3-container w3-center w3-border-bottom w3-border-black">
						<p><h4 >'.$row["1"].'<br></h4>
						 '.$row["3"].'</p>
						
						
						
					  </div>';
						}
					?>
                </table>
			
  </div>
  </div>
  </div>
  </div>
</div>

</div><br>


</body>
<footer class="w3-container w3-white w3-center w3-opacity-min">
  <p>Find us on social media.<br>
 <a href="https://www.facebook.com/pages/Assam-Agricultural-University/109577782393756?ref=br_rs"class="fa fa-facebook-official w3-hover-opacity"></a>
  <a href="https://www.instagram.com/explore/locations/241121773/assam-agricultural-university/" class="fa fa-instagram w3-hover-opacity"></a>
  <a href="http://www.aau.ac.in/" class="fa fa-globe w3-hover-opacity"></a><br>
 
  All copyrights reserved
  </p>
 
 
</footer>
</html>

<?php
	if(isset($_GET["usertype"]))
	{
		echo '<script> alert("Choose User Type"); </script>';	
	}
	if(isset($_GET["user"]))
	{
		echo '<script> alert("Invalid User Name"); </script>';	
	}
	if(isset($_GET["pass"]))
	{
		echo '<script> alert("Incorrect Password. Try Again"); </script>';	
	}
	
?>

