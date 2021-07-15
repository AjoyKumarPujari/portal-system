
<!DOCTYPE html>
<html>
<title>gallery</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/style.css">
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
 <div class="w3-bar w3-indigo w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="../wall.php" class="w3-bar-item w3-button w3-padding-large "><i class="fa fa-home w3-margin-right"></i>AAU COMMUNITY</a>
  <a href="../viewnews.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-newspaper-o"></i></a>
  <a href="../gallery.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Gallery"><i class="fa fa-camera"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages"><i class="fa fa-envelope"></i></a>
  <a href="../logout.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white w3-large" title="Logout">
    <i class="fa fa-sign-out"></i> 
  </a>
 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">News</a>
  <a href="../viewnews.php" class="w3-bar-item w3-button w3-padding-large">News</a>
  <a href="../gallery.php" class="w3-bar-item w3-button w3-padding-large">Gellary</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Message</a>
  <a href="../logout.php" class="w3-bar-item w3-button w3-padding-large">Logout</a>

</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile --><br>
      
      <!-- Accordion --><br>
      
      <!-- Interests --> 
      <!--<div class="w3-card w3-round w3-white w3-hide-small">
        <div class="w3-container">
          <p>Interests</p>
          <p>
            <span class="w3-tag w3-small w3-theme-d5">News</span>
            <span class="w3-tag w3-small w3-theme-d4">W3Schools</span>
            <span class="w3-tag w3-small w3-theme-d3">Labels</span>
            <span class="w3-tag w3-small w3-theme-d2">Games</span>
            <span class="w3-tag w3-small w3-theme-d1">Friends</span>
            <span class="w3-tag w3-small w3-theme">Games</span>
            <span class="w3-tag w3-small w3-theme-l1">Friends</span>
            <span class="w3-tag w3-small w3-theme-l2">Food</span>
            <span class="w3-tag w3-small w3-theme-l3">Design</span>
            <span class="w3-tag w3-small w3-theme-l4">Art</span>
            <span class="w3-tag w3-small w3-theme-l5">Photos</span>
          </p>
        </div>
      </div>-->
      <br>
      
      <!-- Alert Box -->
      <!--<div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
        <p><strong>Hey!</strong></p>
        <p>People are looking at your profile. Find out who.</p>
      </div>-->
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    
    <div class="w3-col m7">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-light-gray "><br>
          <h4 align="center">ADD PHOTO TO GALLERY</h4>
           <form name="form1" id="form1" class="w3-container" enctype="multipart/form-data" method="post" action="upphoto.php">
	      <p><input  type="file" name="file1" id="file1" class="w3-input w3-border w3-white" ></p>
	   <div align="center">
	    <p> <input class="w3-input w3-border w3-white" type="text"  placeholder="Enter Caption" name="caption" required></p>
<input class="w3-btn  w3-indigo w3-round " type="submit" name="submit" value="Uplode">
        
	     <a class="w3-btn  w3-indigo w3-round" href="../gallery.php"> View </a></div>
  </form>
  <hr>
          </div>
        </div>
      </div>

      <!-- End Middle Column -->
    </div>
    
    <!-- Right Column --><!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

<!-- Footer -->

<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-pblack w3-display-middle w3-animate-opacity w3-round-medium"  style="width:450px;">
      <div class="w3-container">
        <a href="#" onclick="document.getElementById('id01').style.display='none'" class="w3-display-topright" style="text-decoration:none;"><i class="fa fa-window-close w3-xxlarge w3-text-red"></i>&nbsp;&nbsp;</a>
        <h5 align="center">Create New Post</h5>
        <div class="w3-container w3-small">
          <form id="form1" name="form1" method="post" action="postnew.php">
            <p><textarea name="topic" required class="w3-input w3-border" placeholder="Type Here..."></textarea></p>
            <p><input type="file" name="file1" id="file1"></p>
            <p><input type="submit" name="submit" value="Submit Post" class="w3-btn w3-block w3-indigo"></p>
          </form>
        </div>
      </div>
    </div>
</div>

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

</body>
</html> 

<?php
	if(isset($_GET["ok"]))
		{
			echo '<script>alert("Photo Uploaded");</script>';
		}
 ?>