<?php
 session_start();
 include 'connect.php';
 $email=$_SESSION["uname"];
 $sql="Select * from professor where mail='$email'";
 $result=mysqli_query($link,$sql);
 $row=mysqli_fetch_array($result);
 $name=$row[1];
?>
<!DOCTYPE html>
<html>
<title>news</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
a:link{
	text-decoration:none;
}
</style>
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-indigo w3-left-align w3-large" style="height:43px">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="wall.php" class="w3-bar-item w3-button w3-padding-large" title="Home"><i class="fa fa-home w3-margin-right"></i>AAU COMMUNITY</a>
  <a href="viewnews.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-newspaper-o"></i></a>
  <a href="gallery/index.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Gallery"><i class="fa fa-camera"></i></a>
  <a href="message.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a><a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white w3-small" title="Logout">
    <i class="fa fa-sign-out w3-large"></i> 
  </a>
 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">News</a>
  <a href="viewnews.php" class="w3-bar-item w3-button w3-padding-large">News</a>
  <a href="gallery/index.php" class="w3-bar-item w3-button w3-padding-large">Gellary</a>
  <a href="message.php" class="w3-bar-item w3-button w3-padding-large">Message</a>
  <a href="viewdept.php" class="w3-bar-item w3-button w3-padding-large">view Department</a>
  <a href="viewteach.php" class="w3-bar-item w3-button w3-padding-large">View Teachers</a>
  <a href="viewstud.php" class="w3-bar-item w3-button w3-padding-large">View Students</a>
  <a href="viewtimetable.php" class="w3-bar-item w3-button w3-padding-large">view Time-Tables</a>

  <a href="viewattendence.php" class="w3-bar-item w3-button w3-padding-large">View Attendance</a>
  <a href="logout.php" class="w3-bar-item w3-button w3-padding-large">Logout</a>

</div>

<nav class="w3-sidebar w3-collapse w3-black w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    
     <p class="w3-center"><img src="<?php echo 'addteachers/'.$row["photo"];?>" class="w3-circle" style="height:120px;width:120px" alt="Avatar"></p>
     <h4 class="w3-center"><?php echo $name; ?></h4>
      <h4 align="center"><i class="fa fa-vcard-o "></i> <a href="professorprofile.php">My Profile</a></h4>
  </div>
  <hr>
  <div class="w3-container">
   
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    
    <a href="wall.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-bell fa-fw"></i>  Add New Post</a>
   
    <a href="viewdept.php" class="w3-bar-item w3-button w3-padding  "><i class="fa fa-building-o fa-fw"></i>  view Department</a>
    <a href="viewteach.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-users fa-fw"></i>  View Teachers</a>
    <a href="viewstud.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-users fa-fw"></i>  View Students</a>    
    <a href="viewtimetable.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-calendar fa-fw"></i>  View Time-Tables</a>
   
    <a href="viewattendence.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-book fa-fw"></i>  View attendance</a>
   
    <br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-round-small" style="margin-left:300px;margin-top:43px;">
<header class="w3-container w3-border-bottom" style="padding-top:22px; padding-bottom:22px">
    <h5><b><i class="fa fa-dashboard"></i> Teachers/NEWS</b></h5>
  </header>
  
  <div class="w3-card-4 w3-white w3-round " style="width:90%; margin:50px auto;">
    	<div class="w3-container w3-round w3-gray">
        	<h5 align="center">LATEST NEWS </h5>
        </div>
    	 <div class="w3-row-padding">
                     <?php
		include "connect1.php";
		$sql="Select * from news";
		$result=mysql_query($sql,$link);
		while($row=mysql_fetch_array($result))
		{
			echo '<div class="w3-container w3-center">
						<h4 >'.$row["1"].'<br></h4>
						<h6 align="right"> '.$row["3"].'<br></h6>
						'.$row["2"].'
						<hr>
						
					  </div>';
						}
					?>
                </table>
			
  </div>
  </div>
  </div>
  </body>


  </html>

  
  <!-- Footer -->



<script>
// Accordion
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>