<?php
 session_start();
 include 'connect.php';
 $email=$_SESSION["uname"];
 $email=$_GET["mail"];
 $sql="Select * from student where mail='$email'";
 $result=mysqli_query($link,$sql);
 $row=mysqli_fetch_array($result);
 ?>
 
<!DOCTYPE html>
<html>
<title>profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
a:link{
	text-decoration:none;
}
</style>
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-indigo w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="walls.php" class="w3-bar-item w3-button w3-padding-large w3-indigo"><i class="fa fa-home w3-margin-right"></i>AAU COMMUNITY</a>
  <a href="newses.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-newspaper-o"></i></a>
  <a href="gallerys.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Gallery"><i class="fa fa-camera"></i></a>
  <a href="messages.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>
  
  <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white w3-small" title="Logout">
    <i class="fa fa-sign-out w3-xlarge"></i>
  </a>
 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-indigo w3-hide w3-hide-large w3-hide-medium w3-large" ">
  <a href="#" class="w3-bar-item w3-button w3-hide w3-padding-large">News</a>
  <a href="newses.php" class="w3-bar-item w3-button w3-padding-large">News</a>
  <a href="gallerys.php" class="w3-bar-item w3-button w3-padding-large">Gellary</a>
  <a href="messages.php" class="w3-bar-item w3-button w3-padding-large">Message</a>
  <a href="viewtimetables.php" class="w3-bar-item w3-button w3-padding-large">Timetable</a>
  <a href="viewattendences.php" class="w3-bar-item w3-button w3-padding-large">Attendence</a>

  <a href="logout.php" class="w3-bar-item w3-button w3-padding-large">Logout</a>
</div>

<br>
<br>
<div class="w3-content w3-margin-top" style="max-width:1400px;">

 
  <div class="w3-row-padding ">
  
    
    <div class="w3-third " >
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container w3-center">
         <img src="<?php echo 'addstudents/'.$row["photo"];?>" width="434" height="290" \>
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2><?php echo $row["name"]; ?></h2>
          </div>
        </div>
        <div class="w3-container w3-padding-4">
      
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-indigo"></i>STUDENT</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-indigo"></i><?php echo $row["mail"]; ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-indigo"></i><?php echo $row["phno"]; ?></p>
           <p><i class="fa fa-calendar fa-fw w3-margin-right w3-large w3-text-indigo"></i><?php echo $row["dob"]; ?></p>
         
          <hr>
       </div>
      </div>

    
    </div>

    
    <div class="w3-twothird  ">
      <div class="w3-container w3-card w3-white  w3-padding "  style="height:488px">
      <hr>
      <h4 class="w3-text-grey w3-padding-3"><i class="fa fa-building fa-fw w3-margin-right w3-xxlarge w3-text-indigo"></i>Department</h4>
         <?php echo $row["dept"]; ?>   
        <br>
        <h4 class="w3-text-grey w3-padding-3"><i class="fa fa-building fa-fw w3-margin-right w3-xxlarge w3-text-indigo"></i>Semester</h4>
        <?php echo $row["sem"]; ?>   
        <br>
        <h4 class="w3-text-grey w3-padding-3"><i class="fa fa-building fa-fw w3-margin-right w3-xxlarge w3-text-indigo"></i>School</h4>
        <?php echo $row["school"]; ?>
        <br>
        <h4 class="w3-text-grey w3-padding-3"><i class="fa fa-building fa-fw w3-margin-right w3-xxlarge w3-text-indigo"></i>College</h4>
		<?php echo $row["college"]; ?>          
        <br>
        <h4 class="w3-text-grey w3-padding-3"><i class="fa fa-home fa-fw w3-margin-right w3-xxlarge w3-text-indigo"></i>Address</h4>
        <?php echo $row["address"]; ?>
        <hr>
      </div>
    </div>

   
  </div>
    
 
</div>
  
 
</div><br>



</body>
</html>


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


